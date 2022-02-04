<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

//memanggil master obat, tindakan dan pasien
use app\models\Drug;
use app\models\Action;
use app\models\Patient;


//Mengambil master data menggunakan active recored
$drug = ArrayHelper::map(Drug::find()->asArray()->all(),'drug_id','drug_name');
$action = ArrayHelper::map(Action::find()->asArray()->all(),'action_id','action_handling');
$patient = ArrayHelper::map(Patient::find()->asArray()->all(),'patient_id','patient_name');
/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'service_drug_id')->dropDownList(
                $drug, 
                ['prompt'=>'...Pilih Obat...']);
    ?>

    <?php //$form->field($model, 'service_action_id')->textInput() ?>
    <?= $form->field($model, 'service_action_id')->dropDownList(
                $action, 
                ['prompt'=>'...Pilih Tindakan...']);
    ?>

    <?php //$form->field($model, 'service_patient_id')->textInput() ?>
    <?= $form->field($model, 'service_patient_id')->dropDownList(
                $patient, 
                ['prompt'=>'...Pilih Pasien...']);
    ?>

    <?= $form->field($model, 'service_subtotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service_date_created')->textInput() ?>

    <?= $form->field($model, 'service_ppn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service_total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
