<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Countries;
use app\models\Currency;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Active', '0' => 'In Active' ], ['prompt' => 'Select Status']) ?>
    
    <?= $form->field($model, 'type')->dropDownList(['subadmin' => 'Subadmin', 'vendor' => 'Vendor', ], ['prompt' => 'Select Type']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?=
        $form->field($model, 'country')
        ->dropDownList(ArrayHelper::map(Countries::find()->asArray()->all(), 'id', 'country_name')
        )
    ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?=
        $form->field($model, 'currency')
        ->dropDownList(ArrayHelper::map(Currency::find()->asArray()->all(), 'uid', 'name')
        )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Create', ['class' => 'btn btn-success', 'name' => 'create-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
