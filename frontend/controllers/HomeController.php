<?php

namespace frontend\controllers;

use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}