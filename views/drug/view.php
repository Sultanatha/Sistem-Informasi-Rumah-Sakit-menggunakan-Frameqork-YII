<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Drug */

$this->title = $model->drug_name;
$this->params['breadcrumbs'][] = ['label' => 'Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="drug-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'drug_id' => $model->drug_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'drug_id' => $model->drug_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah Anda Yakin Ingin Dihapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'drug_id',
            'drug_name',
            'drug_dosis',
            'drug_type',
            'drug_date_exp',
            'drug_date_created',
            'drug_status',
        ],
    ]) ?>

</div>
