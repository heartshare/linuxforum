<?php

use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use topic\models\Topic;
use app\widgets\LinkPager;
use forum\widgets\TopicPager;

/**
 * @var \app\components\View $this
 * @var ActiveDataProvider $dataProvider
 * @var array|ActiveRecord[] $topics
 * @var Topic $topic
 * @var string $title
 */

$this->title = $title;

$formatter = Yii::$app->formatter;

$item['topic_count'] = 0;
?>

<div class="blocktable" id="vf">
    <table class="table">
        <thead>
        <tr>
            <th class="tcl">Темы</th>
            <th class="tc2">Форум</th>
            <th class="tc3">Сообщений</th>
            <th class="tcr">Последнее сообщение</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($topics as $topic): ?>
            <tr class="<?= ($item['topic_count'] % 2 == 0) ? 'roweven' : 'rowodd' ?>">
            <td class="tcl">
                        <a href="<?= Url::toRoute(['/topic/default/view', 'id' => $topic->id])?>"><?= $formatter->asText($topic->subject) ?></a> <span class="byuser"><?= $formatter->asText($topic->first_post_username) ?></span>
                        <?= TopicPager::widget(['topic' => $topic]) ?>
            </td>
            <td class="tc2"><a href="<?= Url::toRoute(['/forum/default/view', 'id' => $topic->forum->id])?>"><?= $topic->forum->name ?></a></td>
            <td class="tc3"><?= $formatter->asInteger($topic->number_posts) ?></td>
            <td class="tcr"><a href="<?= Url::toRoute(['/topic/post/view', 'id' => $topic->last_post_id, '#' => 'p' . $topic->last_post_id])?>"><?= Yii::$app->formatter->asDatetime($topic->last_post_created_at) ?></a> <span class="byuser"><?= $formatter->asText($topic->last_post_username) ?></span></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="text-center">
        <?= LinkPager::widget(['pagination' => $dataProvider->pagination]) ?>
    </div>
</div>