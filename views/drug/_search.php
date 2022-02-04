<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DrugSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drug-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'drug_id') ?>

    <?= $form->field($model, 'drug_name') ?>

    <?= $form->field($model, 'drug_dosis') ?>

    <?= $form->field($model, 'drug_type') ?>

    <?= $form->field($model, 'drug_date_exp') ?>

    <?php // echo $form->field($model, 'drug_date_created') ?>

    <?php // echo $form->field($model, 'drug_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
