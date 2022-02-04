<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Patient;

/**
 * PatientSearch represents the model behind the search form of `app\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'patient_status'], 'integer'],
            [['patient_name', 'patient_fullname', 'patient_date_birth', 'patient_phone', 'patient_gender', 'patient_symptom', 'patient_addres', 'patient_date_created'], 'safe'],
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
        $query = Patient::find();

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
            'patient_id' => $this->patient_id,
            'patient_date_birth' => $this->patient_date_birth,
            'patient_date_created' => $this->patient_date_created,
            'patient_status' => $this->patient_status,
        ]);

        $query->andFilterWhere(['like', 'patient_name', $this->patient_name])
            ->andFilterWhere(['like', 'patient_fullname', $this->patient_fullname])
            ->andFilterWhere(['like', 'patient_phone', $this->patient_phone])
            ->andFilterWhere(['like', 'patient_gender', $this->patient_gender])
            ->andFilterWhere(['like', 'patient_symptom', $this->patient_symptom])
            ->andFilterWhere(['like', 'patient_addres', $this->patient_addres]);

        return $dataProvider;
    }
}
