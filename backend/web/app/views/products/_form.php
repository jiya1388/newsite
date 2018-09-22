<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pcondition')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'creationdate')->textInput() ?>

    <?= $form->field($model, 'categoryid')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'longdescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'featured')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'offpercent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'onsale')->textInput() ?>

    <?= $form->field($model, 'toprated')->textInput() ?>

    <?= $form->field($model, 'indailydeals')->textInput() ?>

    <?= $form->field($model, 'shippingcharges')->textInput() ?>

    <?= $form->field($model, 'specialprice')->textInput() ?>

    <?= $form->field($model, 'productid')->textInput() ?>

    <?= $form->field($model, 'adminid')->textInput() ?>

    <?= $form->field($model, 'approved')->textInput() ?>

    <?= $form->field($model, 'isnew')->textInput() ?>

    <?= $form->field($model, 'sku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'freeshipping')->textInput() ?>

    <?= $form->field($model, 'bestseller')->textInput() ?>

    <?= $form->field($model, 'cost_price')->textInput() ?>

    <?= $form->field($model, 'vendorid')->textInput() ?>

    <?= $form->field($model, 'buy_qty')->textInput() ?>

    <?= $form->field($model, 'get_qty')->textInput() ?>

    <?= $form->field($model, 'off_percent')->textInput() ?>

    <?= $form->field($model, 'offer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
