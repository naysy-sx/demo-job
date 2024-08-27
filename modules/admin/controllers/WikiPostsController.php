<?php

namespace app\modules\admin\controllers;

use app\models\db\WikiPosts;
use app\models\db\WikiPostsSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Class WikiPostsController
 * @package app\modules\admin\controllers
 */
class WikiPostsController extends Controller
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
     * @return string
     */
    public function actionIndex()
    {
        $searchModel  = new WikiPostsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
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
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model         = new WikiPosts();
        $saved_modules = [];

        if ($model->load(Yii::$app->request->post())) {
            // если есть модули
            if (isset($_POST["modules"]) && is_array($_POST["modules"])) {
                foreach ($_POST["modules"] as $tmp_module_num => $tmp_module_data) {
                    foreach ($tmp_module_data as $tmp_module_type => $tmp_module_content) {
                        if ($tmp_module_type == 'images') {
                            $images = $tmp_module_data['images'];

                            $all_modules[$tmp_module_num][$tmp_module_type] = [
                                'data'   => $_POST['images'],
                                'images' => $images,
                            ];
                        } elseif ($tmp_module_type == 'slider') {
                            $images = $tmp_module_data['slider'];

                            $all_modules[$tmp_module_num][$tmp_module_type] = [
                                'data'   => $_POST['slider'],
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

            $model->created_at = time();
            $model->save();

            return $this->redirect([
                'update',
                'id' => $model->id,
            ]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model         = $this->findModel($id);
        $saved_modules = [];

        if ($model->load(Yii::$app->request->post())) {
            //            echo '<pre>';
            //            var_dump($_POST["modules"]);
            //            exit;

            $model->block_have_questions = '';

            if (isset($_POST["modules"]) && is_array($_POST["modules"])) {
                foreach ($_POST["modules"] as $tmp_module_num => $tmp_module_data) {
                    foreach ($tmp_module_data as $tmp_module_type => $tmp_module_content) {
                        if ($tmp_module_type == 'images') {
                            $images = $tmp_module_data['images'];

                            $all_modules[$tmp_module_num][$tmp_module_type] = [
                                'data'   => $_POST['images'],
                                'images' => $images,
                            ];
                        } elseif ($tmp_module_type == 'slider') {
                            $images = $tmp_module_data['slider'];

                            $all_modules[$tmp_module_num][$tmp_module_type] = [
                                'data'   => $_POST['slider'],
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

            $all_modules[]     = $saved_modules;
            $model->modules    = json_encode($all_modules);
            $model->updated_at = time();

            if (!empty($model->publish_date)) {
                $model->publish_date = strtotime($model->publish_date);
            }

            $model->save();

            return $this->redirect([
                'update',
                'id' => $model->id,
            ]);
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
     * @return WikiPosts|null
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = WikiPosts::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Запрошенная wiki-страница не найдена');
    }

    /**
     * Динамическое изменение веса через инпут в таблице
     *
     * @return int
     */
    public function actionChangeWeight()
    {
        $id     = htmlspecialchars($_GET['id']);
        $weight = htmlspecialchars($_GET['weight']);

        /** @var WikiPosts $current_post */
        $current_post = WikiPosts::find()->where(['id' => $id])->one();

        if ($current_post) {
            $current_post->weight = $weight;
            $current_post->save();
        }

        return true;
    }
}
