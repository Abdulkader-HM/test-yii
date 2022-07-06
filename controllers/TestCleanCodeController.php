<?php

namespace app\controllers;

use PDO;
use Yii;

class TestCleanCodeController extends \yii\web\Controller
{

    public $layout = '@app/themes/layout/base';

    public function actionSum($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function actionTemplate()
    {
        if (isset($_GET['lang'])) {
            Yii::$app->language = $_GET['lang'];
        }
        return $this->render('test-clean-code');
    }

}
