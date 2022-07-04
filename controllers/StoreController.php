<?php

namespace app\controllers;

class StoreController extends \yii\web\Controller
{
    public $layout = '@app/themes/layout/main';

    public function actionIndex()
    {

        return $this->render('index');
    }
}
