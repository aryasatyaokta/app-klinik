<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tindakan;

/**
 * TindakanSearch represents the model behind the search form of `app\models\Tindakan`.
 */
class TindakanSearch extends Tindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tindakan'], 'integer'],
            [['tindakan1', 'tindakan2'], 'safe'],
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
        $query = Tindakan::find();

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
            'id_tindakan' => $this->id_tindakan,
        ]);

        $query->andFilterWhere(['like', 'tindakan1', $this->tindakan1])
            ->andFilterWhere(['like', 'tindakan2', $this->tindakan2]);

        return $dataProvider;
    }
}
