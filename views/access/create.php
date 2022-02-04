<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Access */

$this->title = 'Tambah Akses';
$this->params['breadcrumbs'][] = ['label' => 'Akses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
