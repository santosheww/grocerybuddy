<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

$config = [ 
		'id' => 'app-frontend',
		'basePath' => dirname ( __DIR__ ),
		'bootstrap' => [ 
				'log' 
		],
		'controllerNamespace' => 'frontend\controllers',
		'components' => [ 
				'authClientCollection' => [ 
						'class' => 'yii\authclient\Collection',
						'clients' => [ 
								'google' => [ 
										'class' => 'yii\authclient\clients\GoogleOAuth',
										'clientId' => '212452764090-bfhmnngm6r38is87ngt1qju6560qfjrs.apps.googleusercontent.com',
										'clientSecret' => 'RpKEkyC1qdFGKWte4gT5vAKo' 
								],
								'facebook' => [ 
										'class' => 'yii\authclient\clients\Facebook',
										'clientId' => '382212061976487',
										'clientSecret' => '40a84af208af9e80c2f8c425b001abf6' 
								]
								 
						] 
				],
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => true 
				],
				'log' => [ 
						'traceLevel' => YII_DEBUG ? 3 : 0,
						'targets' => [ 
								[ 
										'class' => 'yii\log\FileTarget',
										'levels' => [ 
												'error' 
										] 
								] 
						] 
				],
				
				'db' => [ 
						'class' => '\yii\db\Connection',
						'dsn' => 'mysql:host=localhost;dbname=expertes_grocery',
						'username' => 'expertes_grocery',
						'password' => '!CS@mxLZo1Wk',
						'charset' => 'utf8' 
				],
				
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				] 
		],
		'params' => $params 
];
if (! YII_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config ['bootstrap'] [] = 'debug';
	$config ['modules'] ['debug'] = 'yii\debug\Module';
	
	$config ['bootstrap'] [] = 'gii';
	$config ['modules'] ['gii'] = [ 
			'class' => 'yii\gii\Module',
			'allowedIPs' => [ 
					'127.0.0.1',
					'::1',
					'192.168.1.*',
					'192.168.1.167',
					'192.168.1.139' 
			] 
	];
}
return $config;