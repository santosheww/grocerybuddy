<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\RegisterForm;
use frontend\models\TestLogin;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class RegisterController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function actionRegister() {
		$model = new RegisterForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->validate ()) {
			
			$registerStatus = $model->register();
			
			
		} else {
			return $this->render('register',[
					'model'=>$model,
	
			]);
		}
	}
	public function actionTestlogin() {
		$model = new TestLogin ();
		if ($model->load ( Yii::$app->request->post () ) && $model->validate ()) {
			if ($model->sendEmail ( Yii::$app->params ['adminEmail'] )) {
				Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
			} else {
				Yii::$app->session->setFlash('error', 'There was an error sending email.');
			}
	
			return $this->refresh();
		} else {
			return $this->render('testlogin',[
					'model'=>$model,
	
			]);/** here registerform is from view*/
		}
	}	
}