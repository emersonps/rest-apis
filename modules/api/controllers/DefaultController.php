<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use yii\rest\ActiveController; //Importa para criar RestApi no yii
/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController //Extende para criar RestApi no yii 
{
    public $modelClass = 'app\models\noticia';

    /*public function actions()
    {
        $actions = parent::actions(); 
        unset($actions['delete'], $actions['create']);

        return $actions;
    }*/
}
