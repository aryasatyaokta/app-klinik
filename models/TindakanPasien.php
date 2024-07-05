<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_pasien".
 *
 * @property int $id_tindakan_pasien
 * @property string $nama
 * @property string $penyakit
 * @property string $tindakan
 * @property string $obat_cocok
 */
class TindakanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'penyakit', 'tindakan', 'obat_cocok'], 'required'],
            [['nama', 'penyakit', 'tindakan', 'obat_cocok'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan_pasien' => 'Id Tindakan Pasien',
            'nama' => 'Nama',
            'penyakit' => 'Penyakit',
            'tindakan' => 'Tindakan',
            'obat_cocok' => 'Obat Cocok',
        ];
    }
}
