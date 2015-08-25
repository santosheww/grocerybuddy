<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VendorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendorproducts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Pid') ?>

    <?= $form->field($model, 'Vpid') ?>

    <?= $form->field($model, 'ProductName') ?>

    <?= $form->field($model, 'Brand') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?= $form->field($model, 'UOM') ?>

    <?= $form->field($model, 'AltQty') ?>

    <?= $form->field($model, 'AltUom') ?>

    <?= $form->field($model, 'UnitPrice') ?>

    <?= $form->field($model, 'SalePrice') ?>

    <?= $form->field($model, 'PriceUnit') ?>

    <?= $form->field($model, 'StartDate') ?>

    <?= $form->field($model, 'EndsDate') ?>

    <?= $form->field($model, 'ReserveCount') ?>

    <?= $form->field($model, 'SaleInd') ?>

    <?= $form->field($model, 'FileUpload') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
