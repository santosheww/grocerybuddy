<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorSearch */
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
            'Vpid',
            'ProductName',
            'Brand',
            'Quantity',
            'UOM',
            'AltQty',
           'AltUom',
          'UnitPrice',
            'SalePrice',
           'PriceUnit',
            'StartDate',
            'EndsDate',
           'ReserveCount',
           'SaleInd',
           'FileUpload',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
