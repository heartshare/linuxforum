<?php

namespace post\models;

use Yii;
use topic\models\Topic;

/**
 * Class PostForm
 */
class PostForm extends \yii\base\Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var Post
     */
    public $post;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['message', 'trim'],
            ['message', 'required', 'message' => Yii::t('app/form', 'Required message')],
            ['message', 'string', 'min' => 6, 'tooShort' => Yii::t('app/form', 'String short topic message')],
            ['message', 'string', 'max' => 65534, 'tooLong' => Yii::t('app/form', 'String long topic message')],
        ];
    }

    /**
     * @param Topic $topic
     * @return boolean
     */
    public function create($topic)
    {
        if ($this->validate()) {
            $user = Yii::$app->getUser()->getIdentity();

            $post = new Post();

            $post->topic_id = $topic->id;
            $post->message = $this->message;
            $post->save();

            $topic->updateCounters(['number_posts' => 1]);
            $topic->last_post_username = $user->username;
            $topic->last_post_created_at = time();
            $topic->last_post_id = $post->id;
            $topic->last_post_user_id = $user->id;
            $topic->save();

            $this->post = $post;

            return true;
        }

        return false;
    }
}