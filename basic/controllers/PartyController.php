<?php

namespace app\controllers;

use yii\web\Controller;

class PartyController extends Controller
{
    public function actionParty()
    {
        return $this->render('party', []);
    }
}