<?php

namespace app\modules\admin\models;

/**
 * Модуль генерации содержимого статьи
 * (2-ая версия, для множества блоков)
 * @package app\modules\admin\models
 */
class PostArticleModule
{
    public $first_text_block;
    public $other_text_blocks;
    public $temp_articles;

    /**
     * Запускатор.
     * Отдает массив отдельно с содержимым и уже пролинкованным контентом
     *
     * @return array
     */
    public function get(): array
    {
        if ($this->checkH2()) {
            return [
                'articles' => $this->getArticles(),
                'contents' => $this->getContent(),
            ];
        }

        // если нечего выводить - выводим пустой массив
        return [];
    }

    /**
     * Возвращает содержимое статьи
     *
     * @return string
     */
    private function getArticles(): string
    {
        $result_html  = '';
        $result_array = [];

        // перебираем и строим внешний вид
        $result_html .= '<div class="article-table-of-contents">';
        $result_html .= '<p class="article-table-of-contents__title">Содержание статьи:</p>';
        $result_html .= '<ul class="article-table-of-contents__list">';

        if (count($this->temp_articles) > 1) {
            foreach ($this->temp_articles as $key => $list_link) {
                // так как есть h2 и h2 class='' ищем по '<h2'. Из-за этого остается лишний '>' у первого тега. Убираем
                $list_link = str_replace(">", "", $list_link);

                // формируем массив на вывод
                $result_array[$key] = $list_link;

                // фикс от добавления title= class= в названии
                $array          = explode('"', $list_link);
                $list_link_part = end($array);
                $list_link      = $list_link_part;

                // формируем html на вывод
                $result_html .= "<li>";
                $result_html .= "<a class='article-table-of-contents__link' href='#title-{$key}'>";
                $result_html .= $list_link;
                $result_html .= '</a>';
                $result_html .= '</li>';
            }

            $result_html .= '</ul>';
            $result_html .= '</div>';

            return $result_html;
        }
    }

    /**
     * Возвращает текстовые блоки в соответствии с их расположением
     *
     * @return array
     */
    private function getContent(): array
    {
        $link_counter = 0; // счетчик для ссылок `title-{$}`
        $tmp_ftb_string = [];

        // сначала линкуем first_text_block
        //for ($n = 0; $n <= $this->getCountH2($this->first_text_block); $n++) {
        //    $adds = "<h2 id='title-{$n}'>";
        //    $tmp_ftb_string[$n] .= str_replace('<h2>', $adds, $this->first_text_block, $link_counter);
        //}

        $hs = explode("<h2>", $this->first_text_block);
        $first_text_block_f = '';

        unset($hs[0]);

        foreach ($hs as $k => $h) {
            $first_text_block_f .= "<h2 id='title-{$k}'>";
            $first_text_block_f .= $h;
            $link_counter++;
        }

        $this->first_text_block = $first_text_block_f;

        $ot_text_block_f = [];

        // теперь линкуем остальные блоки из массива other_text_blocks
        foreach ($this->other_text_blocks as $k => $ot_block){
            $ot_text_block_f[$k] .= "<h2 id='title-{$link_counter}'>({$k})";
            $ot_text_block_f[$k] .= $ot_block;
            $link_counter++;
        }

        $this->other_text_blocks = $ot_text_block_f;

        // отдаем в такой же структуре (массивами)
        return [
            'first' => $this->first_text_block,
            'other' => $this->other_text_blocks,
        ];
    }

    /**
     * Проверка, существуют ли вообще заголовки в переданном контенте
     *
     * @return bool
     */
    private function checkH2(): bool
    {
        // берем первый текстовый блок
        $full_string_content = $this->first_text_block;

        // если существуют другие текстовые блоки
        if (is_array($this->other_text_blocks) && count($this->other_text_blocks) > 0) {
            // перебираем их и добавляем содержимое к общей строке
            foreach ($this->other_text_blocks as $text_block) {
                $full_string_content .= $text_block;
            }
        }

        // проверяем, есть ли в получившейся строке h2
        preg_match_all('|<h2(.*)</h2>|Uis', $full_string_content, $result);

        $result              = $result[1];
        $this->temp_articles = $result;

        // если есть - возвращаем true
        if (is_array($result) && count($result) > 1) {
            return true;
        }

        // если нет - false
        return false;
    }

    /**
     * Ручной подсчет кол-ва заголовков
     *
     * @param $string
     *
     * @return int
     */
    private function getCountH2($string): int
    {
        preg_match_all('|<h2(.*)</h2>|Uis', $string, $result);

        return (int)$result;
    }
}