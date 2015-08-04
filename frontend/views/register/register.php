<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\view;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

/** Register Form */

$this->title = 'RegisterForm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
        
     <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>
    
    
     <?php echo $form->field($model, 'userType')->radioList(array(
    '3' => 'User',
    '2' => 'Vendor'
));
?>
               <?= $form->field($model, 'name') ?>
               <?= $form->field($model, 'username') ?>
               <?= $form->field($model, 'password')->passwordInput() ?>
               <?= $form->field($model, 'email') ?>
               <?= $form->field($model, 'mobile') ?>
               <div class="vendor_data">
               <?= $form->field($model, 'storename') ?>
               
               <?= $form->field($model, 'products') ?>
               <?= $form->field($model, 'city') ?>
               <?= $form->field($model, 'pincode') ?>
              <?php echo $form->field($model, 'state')->dropDownList(['AP' => 'AndhraPradesh', 'TS' => 'Telangana', 'KA' => 'Karnataka']); ?> 
               <?= $form->field($model, 'country') ?>
               <?= $form->field($model, 'discription')?></div>
               <div><?= Html::submitButton('Register',['class'=>'btn btn-primery','name'=>'signup-button'])?></div>
               
            <?php ActiveForm ::end();?>   
            </div>
            </div>
            </div>
<?php
$this->registerJs("
$('.vendor_data').css('display','none');
$('input:radio[name=\"RegisterForm[userType]\"]').click(function() {
   var usertype = $(this).val();
  if(usertype == '3')
  {
      $('.vendor_data').css('display','none');
  }
  else
  {
      $('.vendor_data').css('display','block');
  }
});

");
?>