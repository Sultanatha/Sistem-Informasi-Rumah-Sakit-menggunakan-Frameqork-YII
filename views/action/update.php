<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Action */

$this->title = 'Update Tindakan: ' . $model->action_handling;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->action_handling, 'url' => ['view', 'action_id' => $model->action_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="action-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
