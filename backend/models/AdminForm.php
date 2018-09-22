<?php

namespace backend\models;

use yii\base\Model;
use common\models\Admin;

/**
 * This is the model class for table "admin".
 *
 * @property int $uid
 * @property string $username
 * @property string $auth_key
 * @property string $password
 * @property string $password_reset_token
 * @property int $status
 * @property string $email
 * @property string $phone
 * @property string $website
 * @property string $address
 * @property int $country
 * @property string $city
 * @property int $currency
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 */
class AdminForm extends \yii\db\ActiveRecord
{
    public $username;
    public $email;
    public $password;
    public $status;
    public $country;
    public $city;
    public $currency;
    public $type;
    public $created_at;
    public $updated_at;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'status', 'country', 'city', 'currency', 'type', 'created_at', 'updated_at'], 'required'],
            [['status', 'country', 'currency'], 'integer'],
            [['type'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'password', 'password_reset_token', 'email', 'website', 'address', 'city'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 30],
            ['username', 'unique'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email'],
            ['email', 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'email' => 'Email',
            'phone' => 'Phone',
            'website' => 'Website',
            'address' => 'Address',
            'country' => 'Country',
            'city' => 'City',
            'currency' => 'Currency',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function create()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Admin();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        //print_r($user); exit;
        return $user->save() ? $user : null;
    }
}
