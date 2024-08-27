<?php
require_once 'MainSettings.php';

/**
 * Автосборка адресов, ЧПУ.
 * Почему бд - при создании экземпляра класса, коннектиктся к бд и изначально задумыавлся
 * как самостоятельный класс работы с бд до подключения функицонала yii2.
 */
class Bd extends MainSettings
{
    public $mysql;
    public $urls_array;
    public $url_manager_status = 'auto';

    public function __construct()
    {
        if (self::checkStatus()) {
            $this->mysql = new mysqli($this->host, $this->username, $this->password, $this->db);

            // проверяем, нет ли ошибок подключения. если есть - выводим их
            if ($this->mysql->connect_error) {
                echo '<pre>';
                var_dump($this->mysql->connect_error);
                exit;
            }
        }
    }

    /**
     * Запускатор
     *
     * @return array
     */
    public function getAllUrls(): array
    {
        /** если ЧПУ в режиме авто */
        if ($this->url_manager_status == 'auto') {
            /** сначала формируем массив и даем возможность вручную добавить пути */
            $this->manual();

            /** далее собираем материал */
            $this->material();

            /** ... статьи блога */
            $this->hrblog();

            /** ... статьи и разделы вики */
            $this->wiki();

            /** ... новости */
            $this->news();
        } else {
            /** - или ЧПУ в ручном режиме - */
            /** тогда отдаем только заданные руками пути */
            $this->manual();
        }

        /** возвращаем получившийся результат */
        return $this->urls_array;
    }

    /**
     * На случай, если нужно ручками добавить маршруты
     * 'url' => 'controller/method'
     *
     * @return void
     */
    private function manual(): void
    {
        $this->urls_array = [
            'engagement' => 'services/engagement',
            'loyalty'    => 'services/loyalty',
            'consulting' => 'services/consulting',
        ];
    }

    /**
     * Автосборщик материала
     *
     * @return void
     */
    private function material(): void
    {
        $materials = $this->query('link', 'hj_materials');

        if ($materials->num_rows > 0) {
            while ($row = $materials->fetch_assoc()) {
                $this->urls_array[$row['link']]       = 'dynamic-pages/index';
                $this->urls_array[$row['link'] . "/"] = 'dynamic-pages/index';
            }
        }
    }

    /**
     * Автосборщик статей hr-blog
     *
     * @return void
     */
    private function hrblog(): void
    {
        $materials = $this->query('url', 'blog');

        if ($materials->num_rows > 0) {
            while ($row = $materials->fetch_assoc()) {
                $this->urls_array[$row['url']]       = 'dynamic-pages/hr-blog';
                $this->urls_array[$row['url'] . "/"] = 'dynamic-pages/hr-blog';
            }
        }
    }

    /**
     * Автосборщик статей Вики
     *
     * @return void
     */
    private function wiki(): void
    {
        $materials = $this->query('url', 'wiki_posts');

        if ($materials->num_rows > 0) {
            while ($row = $materials->fetch_assoc()) {
                $this->urls_array[$row['url']]       = 'dynamic-pages/wiki';
                $this->urls_array[$row['url'] . "/"] = 'dynamic-pages/wiki';
            }
        }
    }

    /**
     * Автосборщик новостных статей
     *
     * @return void
     */
    private function news(): void
    {
        $materials = $this->query('url', 'news');

        if ($materials->num_rows > 0) {
            while ($row = $materials->fetch_assoc()) {
                $this->urls_array[$row['url']]       = 'dynamic-pages/news';
                $this->urls_array[$row['url'] . "/"] = 'dynamic-pages/news';
            }
        }
    }

    /**
     * Отправка запроса
     *
     * @param string $name  Колонки
     * @param string $table Таблица
     *
     * @return bool|mysqli_result
     */
    private function query(string $name, string $table)
    {
        return $this->mysql->query("SELECT {$name} FROM {$table}");
    }

    /**
     * Отправка запроса с лимитом
     *
     * @param string $name  Колонки
     * @param string $table Таблица
     * @param int    $limit Лимит
     *
     * @return bool|mysqli_result
     */
    private function limitQuery(string $name, string $table, int $limit)
    {
        return $this->mysql->query("SELECT {$name} FROM {$table} LIMIT {$limit}");
    }

    /**
     * Статус чпу - вкл/выкл
     *
     * @return bool
     */
    private static function checkStatus(): bool
    {
        return true;
    }

    /**
     * Быстрое изменение параметра
     *
     * @param string $param
     * @param string $value
     *
     * @return bool
     */
    public static function setParams(string $param, string $value): bool
    {
        if (!empty($param) && is_string($param)) {
            return true;
        }

        return false;
    }

    /**
     * Переключение ЧПУ в ручной режим
     *
     * @return bool
     */
    public function setManual(): bool
    {
        $this->url_manager_status = 'manual';

        return true;
    }

    /**
     * Переключение ЧПУ в автоматически режим
     *
     * @return bool
     */
    public function setAuto(): bool
    {
        $this->url_manager_status = 'auto';

        return true;
    }

    /**
     * Сброс ЧПУ в стоковый вид
     *
     * @return bool
     */
    public function resetUrlManager(): bool
    {
        $this->url_manager_status = 'auto';

        return true;
    }

    /**
     * Передача параметров ручного ЧПУ
     *
     * @param array $params             Параметры ЧПУ
     * @param int   $enable_manual_list Включен ли список с урл-ами выше
     * @param int   $save_state         Сохранить состояние?
     *
     * @return bool
     */
    public function setManualParams(array $params, int $enable_manual_list = 0, int $save_state = 0): bool
    {
        return true;
    }

    /**
     * Установка специального сквозного хранилища (tmp)
     *
     * @param string $bus    Автобус (объект / файл)
     * @param array  $data   Данные
     * @param bool   $status Статус
     *
     * @return bool
     */
    public function setSpecialBus(string $bus, array $data, bool $status): bool
    {
        $sv = new PharData($bus);

        if ($sv->hasChildren()) {
            $sv->getLinkTarget();
        }

        $sv->current();

        return true;
    }
}