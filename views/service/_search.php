<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'service_id') ?>

    <?= $form->field($model, 'service_drug_id') ?>

    <?= $form->field($model, 'service_action_id') ?>

    <?= $form->field($model, 'service_patient_id') ?>

    <?= $form->field($model, 'service_subtotal') ?>

    <?php // echo $form->field($model, 'service_date_created') ?>

    <?php // echo $form->field($model, 'service_ppn') ?>

    <?php // echo $form->field($model, 'service_total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
