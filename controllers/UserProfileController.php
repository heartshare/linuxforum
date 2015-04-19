<?php

namespace app\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use app\models\forms\ProfileForm;
use app\models\User;

class UserProfileController extends \app\components\BaseController
{
    public function actionProfile($id = 0)
    {
        if (Yii::$app->request->get('id') == 0 && !Yii::$app->getUser()->getIsGuest()) {
            $id = Yii::$app->getUser()->getIdentity()->getId();
        }

        /** @var User $user */
        $user = User::findOne(['id' => $id]);

        if (!$user || !Yii::$app->getUser()->can('updateProfile', ['user' => $user])) {
            throw new NotFoundHttpException;
        }

        $model = new ProfileForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $user->about = $model->message;
                $user->timezone = $model->timezone;
                $user->save();
            }
        } else {
            $model->message = $user->about;
            $model->timezone = $user->timezone;
        }

        return $this->render('profile', [
            'user' => $user,
            'model' => $model,
        ]);
    }

    public function actionNotifications($id = 0)
    {
        return $this->render('notifications');
    }
}