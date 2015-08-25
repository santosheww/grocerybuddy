<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "vendorproducts".
 *
 * @property integer $Pid
 * @property integer $Vpid
 * @property string $ProductName
 * @property string $Brand
 * @property string $Quantity
 * @property string $UOM
 * @property string $AltQty
 * @property string $AltUom
 * @property string $UnitPrice
 * @property string $SalePrice
 * @property string $PriceUnit
 * @property string $StartDate
 * @property string $EndsDate
 * @property string $ReserveCount
 * @property string $SaleInd
 * @property string $FileUpload
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
            [['Vpid', 'ProductName', 'Brand', 'Quantity', 'UOM', 'AltQty', 'AltUom', 'UnitPrice', 'SalePrice', 'PriceUnit', 'StartDate', 'EndsDate', 'ReserveCount', 'SaleInd', 'FileUpload'], 'required'],
            [['Vpid'], 'integer'],
            [['ProductName', 'UOM', 'FileUpload'], 'string', 'max' => 200],
            [['Brand', 'Quantity', 'AltQty', 'AltUom', 'UnitPrice', 'PriceUnit', 'SaleInd'], 'string', 'max' => 100],
            [['SalePrice'], 'string', 'max' => 50],
            [['StartDate', 'EndsDate', 'ReserveCount'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Pid' => 'Pid',
            'Vpid' => 'Vpid',
            'ProductName' => 'Product Name',
            'Brand' => 'Brand',
            'Quantity' => 'Quantity',
            'UOM' => 'Uom',
            'AltQty' => 'Alt Qty',
            'AltUom' => 'Alt Uom',
            'UnitPrice' => 'Unit Price',
            'SalePrice' => 'Sale Price',
            'PriceUnit' => 'Price Unit',
            'StartDate' => 'Start Date',
            'EndsDate' => 'Ends Date',
            'ReserveCount' => 'Reserve Count',
            'SaleInd' => 'Sale Ind',
            'FileUpload' => 'File Upload',
        ];
    }
   
   
    	// Types
    
    	/**
    	 * Selecting from the list of answers
    	 */
    	const TYPE_CLOSED = 1;
    
    	/**
    	 * Writing answer manually
    	 */
    	const TYPE_OPENED = 2;
    
    	
    	/**
    	 * @return array
    	*/
  	public static function getTypesList()
    	{
    		return [
    				self::TYPE_CLOSED => 'Closed',
    				self::TYPE_OPENED => 'Opened',
    		];
    	}
    }
