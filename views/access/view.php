<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Access */

$this->title = $model->access_name;
$this->params['breadcrumbs'][] = ['label' => 'Akses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="access-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'access_id' => $model->access_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'access_id' => $model->access_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda Yakin Ingin Menghapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'access_id',
            'access_name',
            'access_fullname',
            'access_role',
            'access_password',
            'access_address',
            'access_city',
            'access_status',
            'access_date_created',
        ],
    ]) ?>

</div>
