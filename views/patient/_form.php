<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_date_birth')->textInput() ?>

    <?= $form->field($model, 'patient_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_gender')->radioList(['L' => 'Laki-Laki', 'P'=>'Perempuan',],['prompt'=>'']) ?>

    <?= $form->field($model, 'patient_symptom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_addres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_date_created')->textInput() ?>

    <?= $form->field($model, 'patient_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
