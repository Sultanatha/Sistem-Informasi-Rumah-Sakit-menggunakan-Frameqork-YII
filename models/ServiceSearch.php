<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Service;

/**
 * ServiceSearch represents the model behind the search form of `app\models\Service`.
 */
class ServiceSearch extends Service
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'service_drug_id', 'service_action_id', 'service_patient_id'], 'integer'],
            [['service_subtotal', 'service_date_created', 'service_ppn', 'service_total'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Service::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'service_id' => $this->service_id,
            'service_drug_id' => $this->service_drug_id,
            'service_action_id' => $this->service_action_id,
            'service_patient_id' => $this->service_patient_id,
            'service_date_created' => $this->service_date_created,
        ]);

        $query->andFilterWhere(['like', 'service_subtotal', $this->service_subtotal])
            ->andFilterWhere(['like', 'service_ppn', $this->service_ppn])
            ->andFilterWhere(['like', 'service_total', $this->service_total]);

        return $dataProvider;
    }
}
