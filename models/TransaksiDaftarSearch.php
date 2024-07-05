<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TransaksiDaftar;

/**
 * TransaksiDaftarSearch represents the model behind the search form of `app\models\TransaksiDaftar`.
 */
class TransaksiDaftarSearch extends TransaksiDaftar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi_daftar', 'status'], 'integer'],
            [['nama', 'penyakit', 'tgl_daftar', 'tipe_bayar'], 'safe'],
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
        $query = TransaksiDaftar::find();

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
            'id_transaksi_daftar' => $this->id_transaksi_daftar,
            'tgl_daftar' => $this->tgl_daftar,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'penyakit', $this->penyakit])
            ->andFilterWhere(['like', 'tipe_bayar', $this->tipe_bayar]);

        return $dataProvider;
    }
}
