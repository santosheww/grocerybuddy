<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendorproducts-form">

    <?php $form = ActiveForm::begin(['id' => '-form']); ?>

    <?= $form->field($model, 'Vpid')->textInput() ?>

    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UOM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AltQty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AltUom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UnitPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SalePrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PriceUnit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StartDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EndsDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ReserveCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SaleInd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FileUpload')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
