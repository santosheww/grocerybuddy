<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VendorproductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendorproducts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Pid') ?>

    <?= $form->field($model, 'ProductName') ?>

    <?= $form->field($model, 'Quatity') ?>

    <?= $form->field($model, 'Weight') ?>

    <?= $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Discount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
