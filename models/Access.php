<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%access}}".
 *
 * @property int $access_id
 * @property string|null $access_name
 * @property string|null $access_fullname
 * @property int|null $access_role
 * @property string|null $access_password
 * @property string|null $access_address
 * @property string|null $access_city
 * @property int|null $access_status
 * @property string|null $access_date_created
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%access}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['access_role', 'access_status'], 'integer'],
            [['access_date_created'], 'safe'],
            [['access_name', 'access_fullname', 'access_password', 'access_address'], 'string', 'max' => 250],
            [['access_city'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'access_id' => 'Access ID',
            'access_name' => 'Nama',
            'access_fullname' => 'Nama Panjang',
            'access_role' => 'Akses Pengguna',
            'access_password' => 'Password',
            'access_address' => 'Alamat',
            'access_city' => 'Kota',
            'access_status' => 'Status',
            'access_date_created' => 'Tanggal',
        ];
    }
}
