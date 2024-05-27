<?php

use yii\bootstrap5\Html;


$this->title = 'Личный кабинет';
?>
<div class="site-account d-flex justify-content-center" style="margin-top:5rem; flex-direction:column; text-align: center;">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2><?= Yii::$app->user->identity->login ?></h2>

</div>