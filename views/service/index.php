<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

//memanggil master obat, tindakan dan pasien
use app\models\Drug;
use app\models\Action;
use app\models\Patient;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'service_id',
            // 'servicePatient.patient_name',
            [
                'attribute'=>'service_patient_id',
                'value'=>'servicePatient.patient_name',
                'filter'=>ArrayHelper::map(Patient::find()->all(),'patient_id','patient_name'),
            ],
            // 'service_action_id',
            // 'serviceAction.action_handling',
            [
                'attribute'=>'service_action_id',
                'value'=>'serviceAction.action_handling',
                'filter'=>ArrayHelper::map(Action::find()->all(),'action_id','action_handling'),
            ],
            // 'service_patient_id',
            // 'serviceDrug.drug_name',
            [
                'attribute'=>'service_drug_id',
                'value'=>'serviceDrug.drug_name',
                'filter'=>ArrayHelper::map(Drug::find()->all(),'drug_id','drug_name'),
            ],
            'service_subtotal',
            //'service_date_created',
            //'service_ppn',
            //'service_total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'service_id' => $model->service_id]);
                 }
            ],
        ],
    ]); ?>


</div>
