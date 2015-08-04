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
	public $pincode;
	public $state;
	public $country;
	public $storename;
	public $storeaddress;




	public $discription;	

	public function rules(){
		return [
				
			['username', 'filter', 'filter'=>'trim'],
			['username','required'],
			['username','unique','targetClass'=>'\common\models\User','message'=>'User Name already Exists Try For New'],
			['username','string','min'=>2, 'max'=>250],
			
				
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
			
			['pincode','filter','filter'=>'trim'],
			['pincode','required'],

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
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}


