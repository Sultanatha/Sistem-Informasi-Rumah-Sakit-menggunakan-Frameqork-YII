<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Access;

/**
 * AccessSearch represents the model behind the search form of `app\models\Access`.
 */
class AccessSearch extends Access
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['access_id', 'access_role', 'access_status'], 'integer'],
            [['access_name', 'access_fullname', 'access_password', 'access_address', 'access_city', 'access_date_created'], 'safe'],
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
        $query = Access::find();

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
            'access_id' => $this->access_id,
            'access_role' => $this->access_role,
            'access_status' => $this->access_status,
            'access_date_created' => $this->access_date_created,
        ]);

        $query->andFilterWhere(['like', 'access_name', $this->access_name])
            ->andFilterWhere(['like', 'access_fullname', $this->access_fullname])
            ->andFilterWhere(['like', 'access_password', $this->access_password])
            ->andFilterWhere(['like', 'access_address', $this->access_address])
            ->andFilterWhere(['like', 'access_city', $this->access_city]);

        return $dataProvider;
    }
}
