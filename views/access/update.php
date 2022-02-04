<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Access */

$this->title = 'Update : ' . $model->access_name;
$this->params['breadcrumbs'][] = ['label' => 'Akses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->access_name, 'url' => ['view', 'access_id' => $model->access_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="access-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
