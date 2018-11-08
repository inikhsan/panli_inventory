<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReceivingLocal;

/**
 * ReceivingLocalSearch represents the model behind the search form about `app\models\ReceivingLocal`.
 */
class ReceivingLocalSearch extends ReceivingLocal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idreceiving_local', 'qty'], 'integer'],
            [['part_number', 'date', 'user'], 'safe'],
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
        $query = ReceivingLocal::find();

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
            'idreceiving_local' => $this->idreceiving_local,
            'qty' => $this->qty,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'part_number', $this->part_number])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
