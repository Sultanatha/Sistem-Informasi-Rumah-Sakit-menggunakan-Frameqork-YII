<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%drug}}".
 *
 * @property int $drug_id
 * @property string|null $drug_name
 * @property resource|null $drug_dosis
 * @property string|null $drug_type
 * @property string|null $drug_date_exp
 * @property string|null $drug_date_created
 * @property int|null $drug_status
 *
 * @property Service[] $services
 */
class Drug extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%drug}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['drug_date_exp', 'drug_date_created'], 'safe'],
            [['drug_status'], 'integer'],
            [['drug_name', 'drug_dosis', 'drug_type'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'drug_id' => 'Drug ID',
            'drug_name' => 'Nama Obat',
            'drug_dosis' => 'Dosis Obat',
            'drug_type' => 'Jenis Obat',
            'drug_date_exp' => 'Tanggal Kadaluarsa',
            'drug_date_created' => 'Tanggal',
            'drug_status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['service_drug_id' => 'drug_id']);
    }
}
