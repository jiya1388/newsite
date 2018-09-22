<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property int $uid
 * @property string $name
 * @property string $code
 * @property string $prefix
 * @property double $value
 * @property int $active
 * @property int $isdefault
 * @property string $suffix
 * @property int $format
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'name', 'code', 'prefix', 'value', 'status'], 'required'],
            [['value'], 'number'],
            [['status', 'isdefault', 'format'], 'integer'],
            [['name', 'code'], 'string', 'max' => 255],
            [['prefix', 'suffix'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'name' => 'Name',
            'code' => 'Code',
            'prefix' => 'Prefix',
            'value' => 'Value',
            'active' => 'Active',
            'isdefault' => 'Isdefault',
            'suffix' => 'Suffix',
            'format' => 'Format',
        ];
    }
}
