<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Putaway;

/**
 * PutawaySearch represents the model behind the search form about `app\models\Putaway`.
 */
class PutawaySearch extends Putaway
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qty'], 'integer'],
            [['part_case', 'old_loc', 'new_loc', 'date', 'user'], 'safe'],
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
        $query = Putaway::find();

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
            'id' => $this->id,
            'qty' => $this->qty,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'part_case', $this->part_case])
            ->andFilterWhere(['like', 'old_loc', $this->old_loc])
            ->andFilterWhere(['like', 'new_loc', $this->new_loc])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
