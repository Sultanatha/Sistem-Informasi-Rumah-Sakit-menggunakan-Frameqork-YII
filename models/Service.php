<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%service}}".
 *
 * @property int $service_id
 * @property int|null $service_drug_id
 * @property int|null $service_action_id
 * @property int|null $service_patient_id
 * @property string|null $service_subtotal
 * @property string|null $service_date_created
 * @property string|null $service_ppn
 * @property string|null $service_total
 *
 * @property Action $serviceAction
 * @property Drug $serviceDrug
 * @property Patient $servicePatient
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%service}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_drug_id', 'service_action_id', 'service_patient_id'], 'integer'],
            [['service_date_created'], 'safe'],
            [['service_subtotal', 'service_ppn', 'service_total'], 'string', 'max' => 5],
            [['service_drug_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drug::className(), 'targetAttribute' => ['service_drug_id' => 'drug_id']],
            [['service_action_id'], 'exist', 'skipOnError' => true, 'targetClass' => Action::className(), 'targetAttribute' => ['service_action_id' => 'action_id']],
            [['service_patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['service_patient_id' => 'patient_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'service_drug_id' => 'Nama Obat',
            'service_action_id' => 'Tindakan',
            'service_patient_id' => 'Nama Pasien',
            'service_subtotal' => 'Subtotal',
            'service_date_created' => 'Tanggal',
            'service_ppn' => 'PPN',
            'service_total' => 'Total',
        ];
    }

    /**
     * Gets query for [[ServiceAction]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceAction()
    {
        return $this->hasOne(Action::className(), ['action_id' => 'service_action_id']);
    }

    /**
     * Gets query for [[ServiceDrug]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceDrug()
    {
        return $this->hasOne(Drug::className(), ['drug_id' => 'service_drug_id']);
    }

    /**
     * Gets query for [[ServicePatient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicePatient()
    {
        return $this->hasOne(Patient::className(), ['patient_id' => 'service_patient_id']);
    }
}
