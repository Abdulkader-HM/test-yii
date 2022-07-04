<?php

namespace app\controllers;

use Yii;
use app\models\ProductForm;


class AdminController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDashboard()
    {
        return $this->render('dashboard');
    }

}
