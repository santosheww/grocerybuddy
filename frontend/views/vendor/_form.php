<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendorproducts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quatity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Discount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
