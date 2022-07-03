<?php

namespace app\controllers;

class TestCleanCodeController extends \yii\web\Controller
{
    public $layout = '@app/themes/layout/base';
    public function actionSum($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function actionTemplate()
    {
        // $this->layout = 'base';
        return $this->render('test-clean-code');
    }
}
