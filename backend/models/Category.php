<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $uid
 * @property string $name
 * @property int $status
 * @property string $creationdate
 * @property int $parent
 * @property string $image
 * @property int $showimage
 * @property string $heading
 * @property int $orderno
 * @property int $show_in_home
 * @property string $small_description
 * @property int $google_catid
 * @property string $icon
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'parent', 'showimage', 'orderno', 'show_in_home', 'google_catid'], 'integer'],
            [['creationdate'], 'safe'],
            [['image', 'showimage', 'heading', 'orderno', 'small_description', 'google_catid'], 'required'],
            [['small_description'], 'string'],
            [['name', 'image', 'heading', 'icon'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'creationdate' => 'Creationdate',
            'parent' => 'Parent',
            'image' => 'Image',
            'showimage' => 'Showimage',
            'heading' => 'Heading',
            'orderno' => 'Orderno',
            'show_in_home' => 'Show In Home',
            'small_description' => 'Small Description',
            'google_catid' => 'Google Catid',
            'icon' => 'Icon',
        ];
    }
}
