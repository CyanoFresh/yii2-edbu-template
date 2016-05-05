<?php

$params = require(__DIR__ . '/params.php');

return [
    'id' => 'basic',
    'name' => 'PROJECTNAME',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'cookieValidationKey' => '1C-4yjtfcXO12OyP8Few9rwQUpJ0XmLc',
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
                '' => 'site/index',
            ],
        ],
        'view' => [
            'class' => '\rmrevin\yii\minify\View',
            'enableMinify' => false,
            'minify_path' => '@webroot/assets',
            'js_position' => [\yii\web\View::POS_END],
            'force_charset' => 'UTF-8',
        ],
    ],
    'params' => $params,
];
