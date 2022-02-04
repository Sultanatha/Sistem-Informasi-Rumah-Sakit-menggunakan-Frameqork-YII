<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Drug;

/**
 * DrugSearch represents the model behind the search form of `app\models\Drug`.
 */
class DrugSearch extends Drug
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['drug_id', 'drug_status'], 'integer'],
            [['drug_name', 'drug_dosis', 'drug_type', 'drug_date_exp', 'drug_date_created'], 'safe'],
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
        $query = Drug::find();

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
            'drug_id' => $this->drug_id,
            'drug_date_exp' => $this->drug_date_exp,
            'drug_date_created' => $this->drug_date_created,
            'drug_status' => $this->drug_status,
        ]);

        $query->andFilterWhere(['like', 'drug_name', $this->drug_name])
            ->andFilterWhere(['like', 'drug_dosis', $this->drug_dosis])
            ->andFilterWhere(['like', 'drug_type', $this->drug_type]);

        return $dataProvider;
    }
}
