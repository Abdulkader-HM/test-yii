<?php

namespace app\controllers;

class SumController extends \yii\web\Controller
{
    public function actionSum($num1, $num2)
    {
        return $num1 + $num2;
    }
}