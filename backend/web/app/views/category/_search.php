<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uid') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'active') ?>

    <?= $form->field($model, 'creationdate') ?>

    <?= $form->field($model, 'parent') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'showimage') ?>

    <?php // echo $form->field($model, 'heading') ?>

    <?php // echo $form->field($model, 'orderno') ?>

    <?php // echo $form->field($model, 'show_in_home') ?>

    <?php // echo $form->field($model, 'small_description') ?>

    <?php // echo $form->field($model, 'google_catid') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
