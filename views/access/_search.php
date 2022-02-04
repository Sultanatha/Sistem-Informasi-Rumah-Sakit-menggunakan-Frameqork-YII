<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccessSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="access-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'access_id') ?>

    <?= $form->field($model, 'access_name') ?>

    <?= $form->field($model, 'access_fullname') ?>

    <?= $form->field($model, 'access_role') ?>

    <?= $form->field($model, 'access_password') ?>

    <?php // echo $form->field($model, 'access_address') ?>

    <?php // echo $form->field($model, 'access_city') ?>

    <?php // echo $form->field($model, 'access_status') ?>

    <?php // echo $form->field($model, 'access_date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
