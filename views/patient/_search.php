<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'patient_name') ?>

    <?= $form->field($model, 'patient_fullname') ?>

    <?= $form->field($model, 'patient_date_birth') ?>

    <?= $form->field($model, 'patient_phone') ?>

    <?php // echo $form->field($model, 'patient_gender') ?>

    <?php // echo $form->field($model, 'patient_symptom') ?>

    <?php // echo $form->field($model, 'patient_addres') ?>

    <?php // echo $form->field($model, 'patient_date_created') ?>

    <?php // echo $form->field($model, 'patient_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
