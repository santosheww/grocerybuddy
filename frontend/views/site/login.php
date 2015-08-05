<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

        <div class="col-lg-8">
            <?php $form = ActiveForm::begin(['id' => 'login-form',
            		'fieldConfig' => [
            				'template' => "<div class=\"row\">\n{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"row\">\n<div class=\"col-lg-8\">{error}</div></div></div>",
            				'labelOptions' => [
            						'class' => 'col-lg-3 control-label'
            				]
            		],
            ]); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field ( $model, 'rememberMe',['options'=>['class'=>'col-lg-offset-3']])->checkbox ()?>
                <div class="form-group">
			<div class="col-lg-offset-1 col-lg-11">
			
            <?= Html::submitButton('Login', ['class' => 'col-lg-offset-2 btn btn-primary', 'name' => 'login-button'])?>
        	</div>
        	
        
        	Don't have an account with us? <?= Html::a('Register Now',['/register/register']); ?>
		</div>
            <?php ActiveForm::end(); ?>
        </div>
</div>
<div class="col-lg-4">
     <?php
					
					$authAuthChoice = AuthChoice::begin ( [ 
							'baseAuthUrl' => [ 
									'site/auth' 
							] 
					] );
					?>

<?php foreach ($authAuthChoice->getClients() as $client): ?>
    <?php $authAuthChoice->clientLink($client) ?><br> 
<?php endforeach; ?>

<?php AuthChoice::end(); ?>
    </div>
<div class="login-ver-divider">
<div class="login-ver-divider-or">OR</div>
</div>
</div>
