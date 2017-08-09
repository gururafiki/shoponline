<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'category/index',
    'modules' => [
        'adminpanel' => [
            'class' => 'app\modules\adminpanel\Module',
        ],
        'backend' => [
            'class' => 'app\modules\backend\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'LedLight',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'category/<category_parent>/<category_name>/<id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>/page/<page:\d>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>/page/<page:\d>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>/page/<page:\d>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>/page/<page:\d>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/<spec4>/<spec4_name>/<spec4_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>/page/<page:\d>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/<spec4>/<spec4_name>/<spec4_id:\d+>/<spec5>/<spec5_name>/<spec5_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>/page/<page:\d>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/<spec4>/<spec4_name>/<spec4_id:\d+>/<spec5>/<spec5_name>/<spec5_id:\d+>/<spec6>/<spec6_name>/<spec6_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>/page/<page:\d>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/<spec4>/<spec4_name>/<spec4_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/<spec4>/<spec4_name>/<spec4_id:\d+>/<spec5>/<spec5_name>/<spec5_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>' => 'category/view',
                'category/<category_parent>/<category_name>/<id:\d+>/<spec1>/<spec1_name>/<spec1_id:\d+>/<spec2>/<spec2_name>/<spec2_id:\d+>/<spec3>/<spec3_name>/<spec3_id:\d+>/<spec4>/<spec4_name>/<spec4_id:\d+>/<spec5>/<spec5_name>/<spec5_id:\d+>/<spec6>/<spec6_name>/<spec6_id:\d+>/byprice/<byprice_name>/<byprice_id:\d+>' => 'category/view',

                'products/lists/<id:\d+>' => 'admin/products/lists',
                'search' => 'category/search',
                'product/<id:\d+>' => 'product/view',
                'register' => 'site/register',
                'login' => 'site/login',
            ],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
