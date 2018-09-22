<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->uid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->uid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'uid',
            'title',
            'description:ntext',
            'pcondition:ntext',
            'price',
            'active',
            'creationdate',
            'categoryid',
            'quantity',
            'longdescription:ntext',
            'featured',
            'stock',
            'offpercent',
            'onsale',
            'toprated',
            'indailydeals',
            'shippingcharges',
            'specialprice',
            'productid',
            'adminid',
            'approved',
            'isnew',
            'sku',
            'weight',
            'freeshipping',
            'bestseller',
            'cost_price',
            'vendorid',
            'buy_qty',
            'get_qty',
            'off_percent',
            'offer',
        ],
    ]) ?>

</div>
