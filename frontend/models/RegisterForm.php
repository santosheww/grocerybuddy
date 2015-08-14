<?php
namespace frontend\models;


use yii\base\Model;
use Yii;
use kop;


/**
 * registermodel
 */
class RegisterForm extends Model
{
	public $RegisterType=3;
	public $name;
	public $email;
	public $password;
	public $mobile;
	public $address;
	public $city;
	public $zip;
	public $state;
	public $country;
	public $storename;
	public $storeaddress;	

	public function rules(){
		return [
			
				
		    ['name', 'filter','filter'=>'trim'],
			['name','required'],
			['name','unique','targetClass'=>'\common\models\User','message'=>'vedor Name already Exists Try For New'],
			['name','string','min'=>2, 'max'=>250],
				
			['email','filter','filter'=>'trim'],
			['email','required'],
			['email','email'],
			
      		['password','required'],
			['password','string','min'=>5,'max'=>8],
								
			['mobile','filter','filter'=>'trim'],
			['mobile','required'],
			['mobile','number'],
				
			['address','filter','filter'=>'trim'],
			['address','required'],
								
			['city','filter','filter'=>'trim'],
			['city','required'],
			
			['zip','filter','filter'=>'trim'],
			['zip','required'],

			['state','filter','filter'=>'trim'],
    		['state','required'],	
				
			['country','filter','filter'=>'trim'],
    		['country','required'],
			
			['storename', 'required', 'when' => function ($model) {
				return $model->RegisterType == 2;				
			}, 'whenClient' => "function (attribute, value) {
        return $('input:radio[name=\"RegisterForm[RegisterType]\"]:checked').val() == 2;
    }"],
    ['storeaddress', 'required', 'when' => function ($model) {
    	return $model->RegisterType == 2;
    }, 'whenClient' => "function (attribute, value) {			
        return $('input:radio[name=\"RegisterForm[RegisterType]\"]:checked').val() == 2;
    }"],
			
			
				
		];
		
		
		
		
		
	}

public function register()
    {
    	
    	$userInfo = Yii::$app->db->createCommand()->insert('user', [
    			'name' => $this->name,
    			'password_hash' => $this->password,
    			'password_reset_token'=>$this->password,
    			'email'=>$this->email,
    			'auth_key'=>'',
    			'status'=>1,
    			'created_at'=>1,
    			'updated_at'=>1,
    			'password'=>$this->password,
    	])->execute();
    	$lastInsertId = Yii::$app->db->getLastInsertID();
    	$data = Yii::$app->db->createCommand()->insert('register', [
		    	'uId' => $lastInsertId,
			    'registerId' => $lastInsertId,
			    'mobile'=>$this->mobile,	
			    'address'=>$this->address,
			    'city'=>$this->city,
		    	'state'=>$this->state,
		    	'country'=>$this->country,
			    'zip'=>$this->zip,	    
			    'storeName'=>$this->storename,
			    'storeAddress'=>$this->storeaddress,      		
		])->execute();
    	
    	return $data;
    
        
    }
}