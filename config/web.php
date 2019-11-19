<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'modules' => [
       'admin' => [
           'class' => 'app\modules\admin\Module',
           'layout' => 'admin',
           'defaultRoute' => 'category/index'
       ],
   ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'OZZBx91Qrw5VROoNQhemVkUvNB4JEdNW',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
          //  'loginUrl' => 'site/index', // меняет страницу авторизации
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
              'class' => 'Swift_SmtpTransport',
              'host' => 'smtp.yandex.ru',
              'username' => 'afonas48@yandex.ru',
              'password' => '',
              'port' => '465',
              'encryption' => 'ssl',
            ],
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
              'category/<id:\d+>/page/<page:\d+>' => 'category/view',
              'category/<id:\d+>' => 'category/view',
              'articles/<id:\d+>' => 'articles/view',
              'search' => 'category/search',
            ],
        ],
        'formatter' => [
            'dateFormat' => 'dd.MM.YYYY',
            'timeFormat' => 'php:H:i:s',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'defaultTimeZone' => 'UTC',
            'timeZone' => 'Europe/Moscow',
            'locale' => 'ru-RU',
        ],

    ],
    'controllerMap' => [
      'elfinder' => [
      'class' => 'mihaildev\elfinder\PathController',
      'access' => ['@'],
      'root' => [
        'baseUrl'=>'@web',
        'basePath'=>'@webroot',
        'path' => 'upload/global',
        'name' => 'Global'
      ],
     ]
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
