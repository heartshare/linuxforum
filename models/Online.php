<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * @property integer $user_ip
 * @property integer $user_id
 * @property integer $vizited_at
 */
class Online extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'online';
    }

    public static function deleteInactiveUsers($duration = 900)
    {
        $time = time() - $duration;

        return static::deleteAll(['<', 'vizited_at', $time]);
    }

    public static function countGuests()
    {
        return static::find()
            ->where(['user_id' => null])
            ->count();
    }

    public static function countUsers()
    {
        return static::find()
            ->where(['IS NOT', 'user_id', null])
            ->count();
    }

    public static function getActiveUsers()
    {
        $array_ids = static::find()
            ->select(['user_id'])
            ->where(['IS NOT', 'user_id', null])
            ->asArray()
            ->all();

        $ids = \yii\helpers\ArrayHelper::getColumn($array_ids, 'user_id');

        $users = User::find()
            ->select(['id', 'username'])
            ->where(['IN', 'id', $ids])
            ->asArray()
            ->all();

        return $users;
    }
}