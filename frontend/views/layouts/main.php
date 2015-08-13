<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register ( $this );
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags()?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>
</head>
<body>
    <?php $this->beginBody()?>
    <div class="top_bg">
    <div class="container">
		<div class="row">
			<div class="top_right">
				<?php echo DatePicker::widget([
    'name' => 'check_issue_date', 
    'value' => date('d-M-Y', strtotime('+2 days')),
    'options' => ['placeholder' => 'Select issue date ...'],
    'pluginOptions' => [
        'format' => 'dd-M-yyyy',
        'todayHighlight' => true
    ]
]); ?>
			</div>
			<div class="top_left">
      <?php
      if (Yii::$app->user->isGuest) {
      	$menuItems [] = [
      			'label' => 'Sign Up',
      			'url' => ['/register/register']
      			];
      	$menuItems [] = [
      			'label' => 'Sign In',
      			'url' => ['/site/login']
      			];
      	$menuItems [] = [
      			'label' => 'Download App',
      			'url' => ['/site/#']
      			];
      	$menuItems [] = [
      			'label' => 'Contac Us',
      			'url' => ['/site/contact']
      			];
      	} 
      	else
      	{
      		$menuItems [] = [
      				'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
      				'url' => ['/site/logout'],
      				'linkOptions' => ['data-method' => 'post']
      				];
      		}
      		echo Nav::widget ([
      				'options' => ['class' => 'navbar-nav navbar-right'],
      				'items' => $menuItems 
						]);
      		?>
      </div>

		</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="header_top">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo">
						<a href="#"><img src="images/logo.png"></a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="search">
						<form>
							<input type="text" value="" placeholder="Search for sale item"> <input
								type="submit" value="">
						</form>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="right-side">
						<div class="rewards">
							<a href="#"><img src="images/rewards.png">Earn more Rewards</a>
						</div>
						<div class="store">
							<a href="#"><img src="images/store.png">Do you own Store?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
NavBar::begin ( [ ]
// 'brandLabel' => Html::img ( 'images/logo.png' ),
// 'brandUrl' => Yii::$app->homeUrl,
// 'options' => [
// 'class' => ''
// ]

 );
$menuItems = [ 
		[ 
				'label' => 'Home',
				'url' => [ 
						'/site/index' 
				] 
		],
		[ 
				'label' => 'About',
				'url' => [ 
						'/site/about' 
				] 
		],
		[ 
				'label' => 'Contact',
				'url' => [ 
						'/site/contact' 
				] 
		] 
];

echo Nav::widget ( [ 
		'options' => [ 
				'class' => 'navbar-nav navbar-right' 
		],
		'items' => $menuItems 
] );
NavBar::end ();
?>
    
	<div class="container"></div>

	<div class="wrap">


		<div class="container">
        <?=Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
        <?= Alert::widget()?>
        <?= $content?>
        </div>
	</div>

	<div class="clearfix"></div>
	<!--footer-->
	<div class="clearfix"></div>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="footer_menus">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Store Locator</a></li>
							<li><a href="#">My Rewards </a></li>
							<li><a href="#">My List </a></li>
							<li><a href="#">Mystore Offers </a></li>
							<li><a href="#">GB Dictionary </a></li>
							<li><a href="#">Legal Info </a></li>
							<li><a href="#">Vendor Options </a></li>
							<li><a href="#">Share App </a></li>
						</ul>
					</div>
					<div class="footer_menus">
						<ul>
							<li><a href="#">Legal Info </a></li>
							<li><a href="#"> Terms of use</a></li>
							<li><a href="#">Privacy </a></li>
							<li><a href="#">Infringement</a></li>

						</ul>
					</div>

					<div class="side-bar">
						<div class="follow">
							<p>FOLLOW US:</p>
							<ul>
								<li><a href="#"><img src="images/fb.png"></a></li>
								<li><a href="#"><img src="images/tiwitter.png"></a></li>
								<li><a href="#"><img src="images/in.png"></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="adress">
						<h2>Address</h2>
						<p>
							#29-19-59, Dornakal Road, xxxxxxxxxxxxxxx,<br /> xxxxxxxxx.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="bottom_footer">
			<div class="container">
				<p class="copy">Copyright &copy;<?= date('Y') ?> <?= Yii::$app->name; ?></p>
				<p class="design">
					Powered by: <a href="#" style="color: #888;">Expert Web Worx</a>
				</p>
			</div>
		</div>
		<div class="clearfix"></div>

    <?php $this->endBody()?>




</body>
</html>
<?php $this->endPage()?>
