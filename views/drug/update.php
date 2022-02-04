<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Drug */

$this->title = 'Update Obat : ' . $model->drug_name;
$this->params['breadcrumbs'][] = ['label' => 'Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->drug_name, 'url' => ['view', 'drug_id' => $model->drug_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drug-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
