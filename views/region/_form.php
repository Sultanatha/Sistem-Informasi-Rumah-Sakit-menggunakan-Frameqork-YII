<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Region */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="region-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'region_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'region_date_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
