<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "banner".
 *
 * @property int $uid
 * @property string $title
 * @property string $link
 * @property string $creationdate
 * @property int $active
 * @property int $order_no
 * @property string $description
 * @property string $banner_name
 * @property string $banner_image
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'link', 'banner_name', 'order_no', 'status'], 'required'],
            [['creationdate'], 'safe'],
            [['status', 'order_no'], 'integer'],
            ['link','url'],
            [['description'], 'string'],
            [['banner_image'], 'file' ,'extensions' => 'jpg, png', 'mimeTypes' => 'image/jpeg, 
            image/png'],
            [['title', 'link', 'banner_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'title' => 'Title',
            'link' => 'Link',
            'creationdate' => 'Creationdate',
            'status' => 'Status',
            'order_no' => 'Order No',
            'description' => 'Description',
            'banner_name' => 'Banner Name',
            'banner_image' => 'Banner Image',
        ];
    }
}
