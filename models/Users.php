<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property int $status
 * @property string $authKey
 * @property string $accessToken
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'status', 'authKey', 'accessToken'], 'required'],
            [['status'], 'integer'],
            [['username', 'password', 'authKey', 'accessToken'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'status' => 'Status',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }
}
