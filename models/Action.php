<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%action}}".
 *
 * @property int $action_id
 * @property string|null $action_handling
 * @property string|null $action_date
 *
 * @property Service[] $services
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%action}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action_date'], 'safe'],
            [['action_handling'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'action_id' => 'Action ID',
            'action_handling' => 'Tindakan',
            'action_date' => 'Tanggal',
        ];
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['service_action_id' => 'action_id']);
    }
}
