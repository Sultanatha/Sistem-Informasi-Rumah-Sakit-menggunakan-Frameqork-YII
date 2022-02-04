<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%patient}}".
 *
 * @property int $patient_id
 * @property string|null $patient_name
 * @property string|null $patient_fullname
 * @property string|null $patient_date_birth
 * @property string|null $patient_phone
 * @property string|null $patient_gender
 * @property string|null $patient_symptom
 * @property string|null $patient_addres
 * @property string|null $patient_date_created
 * @property int|null $patient_status
 *
 * @property Service[] $services
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%patient}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_date_birth', 'patient_date_created'], 'safe'],
            [['patient_status'], 'integer'],
            [['patient_name', 'patient_fullname', 'patient_addres'], 'string', 'max' => 250],
            [['patient_phone', 'patient_symptom'], 'string', 'max' => 100],
            [['patient_gender'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'patient_name' => 'Nama Pasien',
            'patient_fullname' => 'Nama Lengkap Pasien',
            'patient_date_birth' => 'Tanggal Lahir',
            'patient_phone' => 'No HP',
            'patient_gender' => 'Jenis Kelamin',
            'patient_symptom' => 'Gejala',
            'patient_addres' => 'Alamat',
            'patient_date_created' => 'Tanggal',
            'patient_status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['service_patient_id' => 'patient_id']);
    }
}
