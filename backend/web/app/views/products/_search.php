<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uid') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'pcondition') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'creationdate') ?>

    <?php // echo $form->field($model, 'categoryid') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'longdescription') ?>

    <?php // echo $form->field($model, 'featured') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'offpercent') ?>

    <?php // echo $form->field($model, 'onsale') ?>

    <?php // echo $form->field($model, 'toprated') ?>

    <?php // echo $form->field($model, 'indailydeals') ?>

    <?php // echo $form->field($model, 'shippingcharges') ?>

    <?php // echo $form->field($model, 'specialprice') ?>

    <?php // echo $form->field($model, 'productid') ?>

    <?php // echo $form->field($model, 'adminid') ?>

    <?php // echo $form->field($model, 'approved') ?>

    <?php // echo $form->field($model, 'isnew') ?>

    <?php // echo $form->field($model, 'sku') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'freeshipping') ?>

    <?php // echo $form->field($model, 'bestseller') ?>

    <?php // echo $form->field($model, 'cost_price') ?>

    <?php // echo $form->field($model, 'vendorid') ?>

    <?php // echo $form->field($model, 'buy_qty') ?>

    <?php // echo $form->field($model, 'get_qty') ?>

    <?php // echo $form->field($model, 'off_percent') ?>

    <?php // echo $form->field($model, 'offer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
