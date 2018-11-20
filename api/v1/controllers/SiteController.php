<?php

namespace api\v1\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\web\BadRequestHttpException;
use api\BaseController;

class SiteController extends BaseController
{
    public $modelClass = 'api\v1\models\User';

    public function actionIndex()
    {
        throw new BadRequestHttpException('无权限');
    }

    public function actionCreate()
    {
        throw new BadRequestHttpException('无权限');
    }

    public function actionUpdate($id)
    {
        throw new BadRequestHttpException('无权限');
    }

    public function actionDelete($id)
    {
        throw new BadRequestHttpException('无权限');
    }

    public function actionView($id)
    {
        throw new BadRequestHttpException('无权限');
    }
}
