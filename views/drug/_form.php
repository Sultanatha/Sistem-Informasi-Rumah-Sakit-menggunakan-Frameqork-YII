<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Drug */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drug-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'drug_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_dosis')->textInput() ?>

    <?= $form->field($model, 'drug_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_date_exp')->textInput() ?>

    <?= $form->field($model, 'drug_date_created')->textInput() ?>

    <?= $form->field($model, 'drug_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
