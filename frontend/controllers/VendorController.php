<?php

namespace frontend\controllers;

use Yii;
use app\models\Vendorproducts;
use app\models\VendorSearch;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use arogachev\excel\import\basic\Importer;
use frontend\models\Category;
use frontend\models\Test;
use yii\helpers\Html;
use yii\web\UploadedFile;

/**
 * VendorController implements the CRUD actions for Vendorproducts model.
 */
class VendorController extends Controller {
	public function behaviors() {
		return [ 
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'delete' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * Lists all Vendorproducts models.
	 * 
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel = new VendorSearch ();
		$dataProvider = $searchModel->search ( Yii::$app->request->queryParams );
		
		return $this->render ( 'index', [ 
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider 
		] );
	}
	
	/**
	 * Displays a single Vendorproducts model.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionview($id) {
		return $this->render ( 'view', [ 
				'model' => $this->findModel ( $id ) 
		] );
	}
	
	/**
	 * Creates a new Vendorproducts model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new Vendorproducts ();
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->Pid 
			] );
		} else {
			return $this->render ( 'create', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Updates an existing Vendorproducts model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel ( $id );
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->Pid 
			] );
		} else {
			return $this->render ( 'update', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Deletes an existing Vendorproducts model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel ( $id )->delete ();
		
		return $this->redirect ( [ 
				'index' 
		] );
	}
	
	/**
	 * Finds the Vendorproducts model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * 
	 * @param integer $id        	
	 * @return Vendorproducts the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = Vendorproducts::findOne ( $id )) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.');
        }
    }
   public function actionUpload()
    {
        $model = new Vendorproducts();
        
        if ($model->load(Yii::$app->request->post()) ) {
       
        	$model->FileUpload = UploadedFile::getInstance($model, 'FileUpload');
        	
        
        	if ( $model->FileUpload )
        	{
        		
        		$time = time();
        		$model->FileUpload->saveAs(realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension);
        		$model->FileUpload = realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension;
        
        		$handle = fopen($model->FileUpload, "r");
        		while (($fileop = fgetcsv($handle, 1000, ",")) !== false)
        		{
        			
        			$userInfo = Yii::$app->db->createCommand()->insert('vendorproducts', [
    			'uid' =>$fileop[1],
    			'Vpid' =>$fileop[2],
        		'ProductName' =>$fileop[3],
        		'Brand' =>$fileop[4],
        		'Quantity' =>$fileop[5],
        		'UOM' =>$fileop[6],
        		'AltQty' =>$fileop[7],
        		'AltUom' =>$fileop[8],
        		'UnitPrice' =>$fileop[9],
        		'SalePrice' =>$fileop[10],
        		'PriceUnit' =>$fileop[11],
        		'StartDate' =>$fileop[12],
        		'EndsDate' =>$fileop[13],
        		'ReserveCount' =>$fileop[14],
        		'SaleInd' =>$fileop[15],
        		'FileUpload' =>$fileop[16],
        					
    			
    	])->execute();
        		}
        
        		
        	}
        } else {
            return $this->render('vendor_view', [
                'model' => $model,
            ]);
        }
            
            
   
    }
}