<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorproductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendorproducts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendorproducts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vendorproducts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Pid',
            'ProductName',
            'Quatity',
            'Weight',
            'Price',
            // 'Discount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
