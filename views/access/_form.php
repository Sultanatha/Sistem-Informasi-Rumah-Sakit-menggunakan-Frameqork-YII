<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Access */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="access-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'access_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_role')->textInput() ?>

    <?= $form->field($model, 'access_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_status')->textInput() ?>

    <?= $form->field($model, 'access_date_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
