<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Action */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="action-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'action_handling')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
