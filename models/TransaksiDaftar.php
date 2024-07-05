<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_daftar".
 *
 * @property int $id_transaksi_daftar
 * @property string $nama
 * @property string $penyakit
 * @property string $tgl_daftar
 * @property string $tipe_bayar
 * @property int $status
 */
class TransaksiDaftar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_daftar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'penyakit', 'tgl_daftar', 'tipe_bayar', 'status'], 'required'],
            [['tgl_daftar'], 'safe'],
            [['status'], 'integer'],
            [['nama', 'penyakit'], 'string', 'max' => 15],
            [['tipe_bayar'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi_daftar' => 'Id Transaksi Daftar',
            'nama' => 'Nama',
            'penyakit' => 'Penyakit',
            'tgl_daftar' => 'Tgl Daftar',
            'tipe_bayar' => 'Tipe Bayar',
            'status' => 'Status',
        ];
    }
}
