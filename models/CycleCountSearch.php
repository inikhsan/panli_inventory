<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CycleCount;

/**
 * CycleCountSearch represents the model behind the search form about `app\models\CycleCount`.
 */
class CycleCountSearch extends CycleCount
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cycle_count', 'qty'], 'integer'],
            [['part_case', 'location', 'date', 'user'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = CycleCount::find();

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
            'id_cycle_count' => $this->id_cycle_count,
            'qty' => $this->qty,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'part_case', $this->part_case])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
