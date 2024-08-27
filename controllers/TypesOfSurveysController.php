<?php
namespace app\controllers;

use yii\web\Controller;

class TypesOfSurveysController extends Controller
{
    /**
     * @return mixed
     */
    public function actionEngagementSurvey()
    {
        return $this->render('engagement-survey');
    }

    /**
     * @return mixed
     */
    public function actionLoyaltySurvey()
    {
        return $this->render('loyalty-survey');
    }

    /**
     * @return mixed
     */
    public function actionEnps()
    {
        return $this->render('enps');
    }

    /**
     * @return mixed
     */
    public function actionMnps()
    {
        return $this->render('mnps');
    }

    /**
     * @return mixed
     */
    public function actionSatisfactionSurvey()
    {
        return $this->render('satisfaction-survey');
    }

    /**
     * @return mixed
     */
    public function actionPollFeedback()
    {
        return $this->render('poll-feedback');
    }
}