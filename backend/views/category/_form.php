<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Active', '0' => 'In Active' ], ['prompt' => 'Select Status']) ?>

    <?= $form->field($model, 'parent')->dropDownList([ '0' => 'Parent' ]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'showimage')->fileInput() ?>

    <?= $form->field($model, 'heading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderno')->textInput() ?>

    <?= $form->field($model, 'show_in_home')->dropDownList([ '1' => 'Yes', '0' => 'No']) ?>

    <?= $form->field($model, 'small_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'google_catid')->textInput() ?>

    <!--<//?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>-->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
