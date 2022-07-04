<?php

namespace app\controllers;

class StoreController extends \yii\web\Controller
{
    public $layout = '@app/themes/layout/main';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionError()
    {
        return $this->render('404');
    }
    public function actionBlank()
    {
        return $this->render('blank');
    }
    public function actionButtons()
    {
        return $this->render('buttons');
    }
    public function actionCards()
    {
        return $this->render('cards');
    }
    public function actionCharts()
    {
        return $this->render('charts');
    }
    public function actionLogin()
    {
        return $this->render('login');
    }
    public function actionRegister()
    {
        return $this->render('register');
    }
    public function actionTables()
    {
        return $this->render('tables');
    }
    public function actionUtilitiesAnimation()
    {
        return $this->render('utilities-animation');
    }
    public function actionUtilitiesBorder()
    {
        return $this->render('utilities-border');
    }
    public function actionUtilitiesColor()
    {
        return $this->render('utilities-color');
    }
    public function actionUtilitiesOther()
    {
        return $this->render('utilities-other');
    }
    public function actionForgotPassword()
    {
        return $this->render('forgot-password');
    }
}
