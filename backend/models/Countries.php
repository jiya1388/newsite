<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string $iso
 * @property string $name
 * @property string $country_name
 * @property string $iso3
 * @property int $numcode
 * @property int $phonecode
 * @property int $status
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iso', 'name', 'country_name', 'phonecode', 'status'], 'required'],
            [['numcode', 'phonecode', 'status'], 'integer'],
            [['iso'], 'string', 'max' => 2],
            [['name', 'country_name'], 'string', 'max' => 80],
            [['iso3'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iso' => 'Iso',
            'name' => 'Name',
            'country_name' => 'Country Name',
            'iso3' => 'Iso3',
            'numcode' => 'Numcode',
            'phonecode' => 'Phonecode',
            'status' => 'Status',
        ];
    }
}
