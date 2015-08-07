<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config = [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
    		'authClientCollection' => [
    				'class' => 'yii\authclient\Collection',
    				'clients' => [
    						'google' => [
    								'class' => 'yii\authclient\clients\GoogleOAuth',
    								'clientId' => '100220280692-lmuuncqhti4k5ld8ikmfb4k8ie05khls.apps.googleusercontent.com',
    								'clientSecret' => 'RK0J5r_pZIJMw0VAH-udsQIN',
    						],
    						'facebook' => [
    								'class' => 'yii\authclient\clients\Facebook',
    								'clientId' => '1589323024617551',
    								'clientSecret' => 'f2770d20504841ad86162087aa35727e',
    								'scope' => 'email,user_birthday,'
    						]
    				]
    		],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                ],
            ],
        ],
    		
    		'db' => [
    				         'class' => '\yii\db\Connection',
    				         'dsn' => 'mysql:host=localhost;dbname=grocery',
    				         'username' => 'root',
    				         'password' => '',
    				         'charset' => 'utf8',
    				     ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
if (!YII_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config['bootstrap'][] = 'debug';
	$config['modules']['debug'] = 'yii\debug\Module';

	$config['bootstrap'][] = 'gii';
	$config['modules']['gii'] = [
    		'class' => 'yii\gii\Module',
    		'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*', '192.168.1.167','192.168.1.139']
    ];
}
return $config;

