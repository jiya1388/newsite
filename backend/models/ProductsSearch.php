<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'active', 'categoryid', 'quantity', 'featured', 'stock', 'onsale', 'toprated', 'indailydeals', 'shippingcharges', 'productid', 'adminid', 'approved', 'isnew', 'freeshipping', 'bestseller', 'vendorid', 'buy_qty', 'get_qty', 'off_percent', 'offer'], 'integer'],
            [['title', 'description', 'pcondition', 'price', 'creationdate', 'longdescription', 'offpercent', 'sku', 'weight'], 'safe'],
            [['specialprice', 'cost_price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'uid' => $this->uid,
            'active' => $this->active,
            'creationdate' => $this->creationdate,
            'categoryid' => $this->categoryid,
            'quantity' => $this->quantity,
            'featured' => $this->featured,
            'stock' => $this->stock,
            'onsale' => $this->onsale,
            'toprated' => $this->toprated,
            'indailydeals' => $this->indailydeals,
            'shippingcharges' => $this->shippingcharges,
            'specialprice' => $this->specialprice,
            'productid' => $this->productid,
            'adminid' => $this->adminid,
            'approved' => $this->approved,
            'isnew' => $this->isnew,
            'freeshipping' => $this->freeshipping,
            'bestseller' => $this->bestseller,
            'cost_price' => $this->cost_price,
            'vendorid' => $this->vendorid,
            'buy_qty' => $this->buy_qty,
            'get_qty' => $this->get_qty,
            'off_percent' => $this->off_percent,
            'offer' => $this->offer,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'pcondition', $this->pcondition])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'longdescription', $this->longdescription])
            ->andFilterWhere(['like', 'offpercent', $this->offpercent])
            ->andFilterWhere(['like', 'sku', $this->sku])
            ->andFilterWhere(['like', 'weight', $this->weight]);

        return $dataProvider;
    }
}
