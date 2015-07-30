<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendorproducts".
 *
 * @property integer $Pid
 * @property string $ProductName
 * @property string $Quatity
 * @property string $Weight
 * @property string $Price
 * @property string $Discount
 */
class Vendorproducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendorproducts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductName', 'Quatity', 'Weight', 'Price', 'Discount'], 'required'],
            [['ProductName'], 'string', 'max' => 200],
            [['Quatity', 'Weight', 'Discount'], 'string', 'max' => 100],
            [['Price'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Pid' => 'Pid',
            'ProductName' => 'ProductName',
            'Quatity' => 'Quatity',
            'Weight' => 'Weight',
            'Price' => 'Price',
            'Discount' => 'Discount',
        ];
    }
}
