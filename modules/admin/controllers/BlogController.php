<?php

namespace app\modules\admin\controllers;

use app\models\db\Blog;
use app\models\db\BlogSearch;
use app\models\personal\Editor;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * Блог
 * @package app\modules\admin\controllers
 */
class BlogController extends Controller
{
    public $layout = 'admin';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Главная таблица со всем материалом раздела
     *
     * @return string
     */
    public function actionIndex()
    {
        $editor = new Editor;
        $editor->login();

        $searchModel  = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Просмотр технической информации статьи
     *
     * @param $id
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Создание статьи
     *
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Blog();

        // если метод = пост (была отправлена форма)
        if ($model->load(Yii::$app->request->post())) {

            // если загружают картинку
            if (UploadedFile::getInstance($model, 'image')) {
                $model->image = UploadedFile::getInstance($model, 'image');
                $model->image = $model::upload($model->image);
            }

            // если верхнюю загружают картинку
            if (UploadedFile::getInstance($model, 'up_images')) {
                $model->up_images = UploadedFile::getInstance($model, 'up_images');
                $model->up_images = $model::upload($model->up_images);
            }

            $model->status = 1;
            //$model->publish      = 1;
            $model->created_at   = time();
            $model->publish_date = date('Y-m-d');

            // если есть модули
            if (isset($_POST["modules"]) && is_array($_POST["modules"])) {
                $model->modules = json_encode($_POST["modules"]);
            }

            $model->created_at = strtotime($model->publish_date) + 3600 * 6;
            //            $model->publish_date = strtotime($model->publish_date);

            $model->hide_author = 0;

            // сохраняем
            $model->save();

            // редиректим
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Редактирование статьи
     *
     * @param $id
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model         = $this->findModel($id);
        $saved_modules = [];

        // если нажали сохранение
        if ($model->load(Yii::$app->request->post())) {
            // проверяем, была ли новая загрузка для миниатюрки. если да - загружаем
            if (UploadedFile::getInstance($model, 'image')) {
                $model->image = UploadedFile::getInstance($model, 'image');
                $model->image = $model::upload($model->image);
            } else {
                $model->image = $model->oldAttributes['image'];
            }

            // проверяем, была ли новая загрузка для верхней картинки. если да - загружаем
            if (UploadedFile::getInstance($model, 'up_images')) {
                $model->up_images = UploadedFile::getInstance($model, 'up_images');
                $model->up_images = $model::upload($model->up_images);
            } else {
                $model->up_images = $model->oldAttributes['up_images'];
            }

            if (isset($_POST["modules"]) && is_array($_POST["modules"])) {
                foreach ($_POST["modules"] as $tmp_module_num => $tmp_module_data) {
                    foreach ($tmp_module_data as $tmp_module_type => $tmp_module_content) {
                        if ($tmp_module_type == 'images') {
                            $images = $tmp_module_data['images'];

                            $all_modules[$tmp_module_num][$tmp_module_type] = [
                                'data'   => $_POST['images'],
                                'images' => $images,
                            ];
                        } elseif ($tmp_module_type == 'slider'){
                            $images = $tmp_module_data['slider'];

                            $all_modules[$tmp_module_num][$tmp_module_type] = [
                                'data'   => $_POST["modules"][$tmp_module_num]["slider"],
                                'images' => $images,
                            ];
                        } elseif ($tmp_module_type == 'post-module-ids') {
                            $all_modules[$tmp_module_num][$tmp_module_type][] = $tmp_module_content;
                        } else {
                            $all_modules[$tmp_module_num][$tmp_module_type] = $tmp_module_content;
                        }
                    }
                }
            } else {
                $all_modules = [];
            }
            
            $all_modules[]  = $saved_modules;
            $model->modules = json_encode($all_modules);


            // добавляем метки редактирования статьи
            //$model->created_at = (int)strtotime($model->created_at);

            $model->updated_at = time();

            // удаляем тонну пробелов от редакторов
            // пы. сы.: при тестах наполнения заметил, что при наполнении сотрудники
            // копировали с большим кол-вом пробелов
            $model->url = trim($model->url);

            // сохраняем
            $model->save();

            return $this->redirect("/admin/blog/update/?id={$model->id}");
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     *
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @param $id
     *
     * @return Blog|null
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Генерация содержания статьи (верхний блок)
     *
     * @param $content
     *
     * @return array
     */
    public static function getArticles($content)
    {
        // ищем все h2 заголовки
        preg_match_all('|<h2(.*)</h2>|Uis', $content, $result);
        $result_html  = '';
        $result_array = [];

        // перебираем и строим внешний вид
        $result_html .= '<div class="article-table-of-contents">';
        $result_html .= '<p class="article-table-of-contents__title">Содержание статьи:</p>';
        $result_html .= '<ul class="article-table-of-contents__list">';

        if (count($result[1]) > 1) {
            foreach ($result[1] as $key => $list_link) {
                // так как есть h2 и h2 class='' ищем по '<h2'. Из-за этого остается лишний '>' у первого тега. Убираем
                $list_link = str_replace(">", "", $list_link);

                // формируем массив на вывод
                $result_array[$key] = $list_link;

                // фикс от добавления title= class= в названии
                $list_link_part = end(explode('"', $list_link));
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

            $result = [
                'html'  => $result_html,
                'array' => $result_array,
            ];

            return $result;
        }
    }

    /**
     * Расстановка ссылок внутрь тегов h2
     *
     * @param $content
     *
     * @return string
     */
    public static function setHrefsForTitles($content)
    {
        // проверяем, есть ли вообще h2 заголовки
        preg_match_all('|<h2(.*)</h2>|Uis', $content, $result);

        if (is_array($result) && count($result) > 1) {
            $new_content = '';

            // сохраняем в темп для индексации № строк
            $file = 'tmp_content.txt';
            file_put_contents($file, $content);

            // читаем темп
            $handle = fopen($file, 'r');

            // создаем счетчик тайтлов
            $title_qty = 0;

            // перебираем построчно
            while (($line = fgets($handle)) !== false) {
                // для корректности подсчетов, удалим пробелы вокруг строки
                //$line = trim($line); todo: вызывало глюк с пропажей картинок

                // если первые 4 символа равны тегу <h2>
                if (mb_substr($line, 0, 4, 'UTF-8') == '<h2>') {
                    // удаляем тег h2
                    $clear_tag = mb_substr($line, 4, 9999, 'UTF-8');

                    // и добавляем его же, но с title=''
                    $result_str = "<h2 id='title-{$title_qty}'>" . $clear_tag;

                    $new_content .= $result_str;
                    $title_qty++;
                } else {
                    // если нет - просто пропускаем строку и сохраняем в $new_content
                    $new_content .= $line;
                }
            }
            fclose($handle);
        } else {
            $new_content = $content;
        }

        return $new_content;
    }

    /**
     * @param $point
     *
     * @return bool[]
     */
    private static function safeState($point): array
    {
        return [$point => true];
    }
}
