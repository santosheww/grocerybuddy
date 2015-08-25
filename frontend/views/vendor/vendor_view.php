<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;




$this->title = $model->Pid;
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="vendorproducts-view">

    <h1><?= Html::encode($this->title) ?></h1>   
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
        <?= $form->field($model, 'FileUpload')->fileInput() ?>

     <div class="form-group">
     
        <?= Html::submitButton($model->isNewRecord ? 'Import' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
   <?php ActiveForm::end(); ?>
    </div>
    

                    