<?php
namespace frontend\controllers;

use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController as RestActiveController;
use yii\web\ForbiddenHttpException;

class ActiveController extends RestActiveController{

    public function behaviors(){
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['only'] = ['create', 'update', 'delete'];
        $behaviors['authenticator']['authMethods'] = [
                HttpBearerAuth::class
        ];
        return $behaviors;
    }

    public function checkAccess($action, $model = null, $params = []){
                
        if(in_array($action, ['update', 'delete']) && $model->created_by !== \Yii::$app->user->id){
                throw new ForbiddenHttpException('You do not have permission to change this record');
        }
    }

}