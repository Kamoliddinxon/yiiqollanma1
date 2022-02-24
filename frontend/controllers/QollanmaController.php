<?php

namespace frontend\controllers;

use yii\web\Controller;

/* @var $this \yii\web\View */


class QollanmaController extends Controller
{


    public function actionQism1(){

        $text = "Ushbu qisimda yiiframeworkni qanday qilib kompyuterga lokal webserverga o'rnatishni ko'rib chiqamiz";

        return $this->render('1-qism', ['text'=>$text]);
    }


    public function actionQism2(){

        $sarlavha = "Admin qismini sozlash. Proyektni Backend va Frontendga ajratish";

        return $this->render('2-qism', ['sarlavh'=>$sarlavha]);
    }


    public function actionQism3(){

        return $this->render('3-qism');
    }


    public function actionQism4(){

        return $this->render('4-qism');
    }


    public function actionQism5(){

        return $this->render('5-qism');
    }


    public function actionQism6(){

        return $this->render('6-qism');
    }


    public function actionQism7(){

        return $this->render('7-qism');
    }


    public function actionQism8(){

        return $this->render('8-qism');
    }


    public function actionQism9(){

        return $this->render('9-qism');
    }


    public function actionQism10(){

        return $this->render('10-qism');
    }

}