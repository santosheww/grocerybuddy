<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'L662aMlHzJ8kwYgCFL8a1We9AA8iqb8w',
        ],
    ],
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
