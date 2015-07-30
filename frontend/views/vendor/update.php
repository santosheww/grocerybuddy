<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Update Vendorproducts: ' . ' ' . $model->Pid;
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Pid, 'url' => ['view', 'id' => $model->Pid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vendorproducts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
