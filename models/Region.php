<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%region}}".
 *
 * @property int $region_id
 * @property string|null $region_city
 * @property string|null $region_province
 * @property string|null $region_address
 * @property string|null $region_date_created
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%region}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_address'], 'string'],
            [['region_date_created'], 'safe'],
            [['region_city', 'region_province'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'region_city' => 'Wilayah Kota',
            'region_province' => 'Provinsi',
            'region_address' => 'Alamat',
            'region_date_created' => 'Tanggal',
        ];
    }
}
