<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

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
				
			['storename','filter','filter'=>'trim'],
			['storename','required'],

			['storeaddress','filter','filter'=>'trim'],
			['storeaddress','required'],
				
		];
		
		
		
		
		
	}

public function register()
    {
    	$data = Yii::$app->db->createCommand()->insert('register', [
    'name' => $this->name,
    'email' => $this->email,
    'password'=>$this->password,
    'mobile'=>$this->mobile,	
    'address'=>$this->address,
    'city'=>$this->city,
    'zip'=>$this->zip,
    'state'=>$this->state,
    'country'=>$this->country,
    	'storename'=>$this->storename,
    	'storeaddress'=>$this->storeaddress,   			
    		
])->execute();
    	print_r($data);exit();
        
    }
}


