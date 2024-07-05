<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "useres".
 *
 * @property int $id_useres
 * @property string $nama
 * @property string $username
 * @property int $password
 */
class Useres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'useres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'username', 'password'], 'required'],
            [['password'], 'integer'],
            [['nama', 'username'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_useres' => 'Id Useres',
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
