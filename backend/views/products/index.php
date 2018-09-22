<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'title',
            'description:ntext',
            'pcondition:ntext',
            'price',
            //'active',
            //'creationdate',
            //'categoryid',
            //'quantity',
            //'longdescription:ntext',
            //'featured',
            //'stock',
            //'offpercent',
            //'onsale',
            //'toprated',
            //'indailydeals',
            //'shippingcharges',
            //'specialprice',
            //'productid',
            //'adminid',
            //'approved',
            //'isnew',
            //'sku',
            //'weight',
            //'freeshipping',
            //'bestseller',
            //'cost_price',
            //'vendorid',
            //'buy_qty',
            //'get_qty',
            //'off_percent',
            //'offer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
