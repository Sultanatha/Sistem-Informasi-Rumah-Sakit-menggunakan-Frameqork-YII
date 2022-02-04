<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */

$this->title = $model->patient_name;
$this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="patient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'patient_id' => $model->patient_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'patient_id' => $model->patient_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'patient_id',
            'patient_name',
            'patient_fullname',
            'patient_date_birth',
            'patient_phone',
            'patient_gender',
            'patient_symptom',
            'patient_addres',
            'patient_date_created',
            'patient_status',
        ],
    ]) ?>

</div>
