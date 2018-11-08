<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Outbound;

/**
 * OutboundSearch represents the model behind the search form about `app\models\Outbound`.
 */
class OutboundSearch extends Outbound
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_outbound'], 'integer'],
            [['part_number', 'qty', 'date', 'user'], 'safe'],
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
        $query = Outbound::find();

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
            'id_outbound' => $this->id_outbound,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'part_number', $this->part_number])
            ->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
