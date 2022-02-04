<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Service */

$this->title = $model->service_id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'service_id' => $model->service_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'service_id' => $model->service_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'service_id',
            // 'service_drug_id',
            'serviceDrug.drug_name',
            // 'service_action_id',
            'serviceAction.action_handling',
            // 'service_patient_id',
            'servicePatient.patient_name',
            'service_subtotal',
            'service_date_created',
            'service_ppn',
            'service_total',
        ],
    ]) ?>

</div>
