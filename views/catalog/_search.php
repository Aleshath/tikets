<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CatalogSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="event-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <? $form->field($model, 'id') ?>

    <? $form->field($model, 'title') ?>

    <? $form->field($model, 'discription') ?>

    <? $form->field($model, 'admin_reason') ?>

    <? $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'count_ticket') ?>

    <?php // echo $form->field($model, 'review_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'price_ticket') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <div class="form-group">
        <? Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <? Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
