<?php

use yii\helpers\Url;

/* @var \user\models\User $user */
/* @var string $password new user password */
?>
Добро пожаловать на форум по адресу <?= Url::home(true) ?>.

Учётные данные вашего аккаунта:
Имя пользователя: <?= $user->username ?>


Пройдите по адресу <?= Url::toRoute(['/user/identity/login'], true) ?>, чтобы войти под свой учетной записью и активировать аккаунт.


--
(Не отвечайте на это сообщение)