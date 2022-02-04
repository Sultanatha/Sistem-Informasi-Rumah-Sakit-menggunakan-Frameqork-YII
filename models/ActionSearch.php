<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Action;

/**
 * ActionSearch represents the model behind the search form of `app\models\Action`.
 */
class ActionSearch extends Action
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action_id'], 'integer'],
            [['action_handling', 'action_date'], 'safe'],
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
        $query = Action::find();

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
            'action_id' => $this->action_id,
            'action_date' => $this->action_date,
        ]);

        $query->andFilterWhere(['like', 'action_handling', $this->action_handling]);

        return $dataProvider;
    }
}
