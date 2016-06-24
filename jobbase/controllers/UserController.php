<?php

namespace app\controllers;
use yii;
use yii\web\Controller;

use app\models\User;
use app\models\job;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class UserController extends \yii\web\Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionRegister()
    {
    $user = new user();

    if ($user->load(Yii::$app->request->post())) {
        if ($user->validate()) {
            // form inputs are valid, do something here


            $user->save();

            Yii::$app->getSession()->setFlash('success' , 'You are now registered');
            return $this->redirect('index.php');
        }
    }

    return $this->render('register', [
        'user' => $user,
    ]);   
     }

}
