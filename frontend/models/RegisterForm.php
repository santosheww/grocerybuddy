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
	public $userType=3;
	public $username;
	public $name;
	public $password;
	public $email;
	public $mobile;
	public $storename;
	public $products;
	public $address;
	public $city;
	public $pincode;
	public $state;
	public $country;
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
			
      		['password','required'],
			['password','string','min'=>5,'max'=>8],
				
			['email','filter','filter'=>'trim'],
			['email','required'],
			['email','email'],
				
			['mobile','filter','filter'=>'trim'],
			['mobile','required'],
			['mobile','number'],
			
			['storename','filter','filter'=>'trim'],
			['storename','required'],
			
			
			['products','filter','filter'=>'trim'],
			['products','required'],
				
			['city','filter','filter'=>'trim'],
			['city','required'],
			
			['pincode','filter','filter'=>'trim'],
			['pincode','required'],

			['state','filter','filter'=>'trim'],
    		['state','required'],	
				
			['country','filter','filter'=>'trim'],
    		['country','required'],	

			['discription','filter','filter'=>'trim'],
			['discription','required'],
				
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


