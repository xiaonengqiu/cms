<?php

/* @var $this yii\web\View */
/* @var $user backend\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['user/reset-password', 'token' => $user->password_reset_token]);
?>
Hello <?= $user->username ?>,

<?= yii::t('app', 'Follow the link below to reset your password') ?>:

<?= $resetLink ?>
