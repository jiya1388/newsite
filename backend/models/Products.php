<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $uid
 * @property string $title
 * @property string $description
 * @property string $pcondition
 * @property string $price
 * @property int $active
 * @property string $creationdate
 * @property int $categoryid
 * @property int $quantity
 * @property string $longdescription
 * @property int $featured
 * @property int $stock
 * @property string $offpercent
 * @property int $onsale
 * @property int $toprated
 * @property int $indailydeals
 * @property int $shippingcharges
 * @property double $specialprice
 * @property int $productid
 * @property int $adminid
 * @property int $approved
 * @property int $isnew
 * @property string $sku
 * @property string $weight
 * @property int $freeshipping
 * @property int $bestseller
 * @property double $cost_price
 * @property int $vendorid
 * @property int $buy_qty
 * @property int $get_qty
 * @property int $off_percent
 * @property int $offer
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'pcondition', 'longdescription'], 'string'],
            [['active', 'categoryid', 'quantity', 'featured', 'stock', 'onsale', 'toprated', 'indailydeals', 'shippingcharges', 'productid', 'adminid', 'approved', 'isnew', 'freeshipping', 'bestseller', 'vendorid', 'buy_qty', 'get_qty', 'off_percent', 'offer'], 'integer'],
            [['creationdate'], 'safe'],
            [['stock', 'specialprice', 'productid', 'adminid', 'approved', 'sku', 'weight', 'freeshipping', 'bestseller', 'cost_price', 'vendorid', 'buy_qty', 'get_qty', 'off_percent', 'offer'], 'required'],
            [['specialprice', 'cost_price'], 'number'],
            [['title', 'price', 'offpercent', 'sku', 'weight'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'pcondition' => 'Pcondition',
            'price' => 'Price',
            'active' => 'Active',
            'creationdate' => 'Creationdate',
            'categoryid' => 'Categoryid',
            'quantity' => 'Quantity',
            'longdescription' => 'Longdescription',
            'featured' => 'Featured',
            'stock' => 'Stock',
            'offpercent' => 'Offpercent',
            'onsale' => 'Onsale',
            'toprated' => 'Toprated',
            'indailydeals' => 'Indailydeals',
            'shippingcharges' => 'Shippingcharges',
            'specialprice' => 'Specialprice',
            'productid' => 'Productid',
            'adminid' => 'Adminid',
            'approved' => 'Approved',
            'isnew' => 'Isnew',
            'sku' => 'Sku',
            'weight' => 'Weight',
            'freeshipping' => 'Freeshipping',
            'bestseller' => 'Bestseller',
            'cost_price' => 'Cost Price',
            'vendorid' => 'Vendorid',
            'buy_qty' => 'Buy Qty',
            'get_qty' => 'Get Qty',
            'off_percent' => 'Off Percent',
            'offer' => 'Offer',
        ];
    }
}
