<?php

$config = [
    'id' => 'minimal',
    'basePath' => dirname(__DIR__),
    'viewPath' => dirname(__DIR__) . '/resources/views',
    'bootstrap' => [
        'debug',
    ],

    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
    ],

    'components' => [
        'request' => [
            'cookieValidationKey' => 'jaklesHtNzHONAxk2Ca6UjR49iHgN_9U',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            //'errorAction' => 'site/error',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=linuxforum',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'urlManager' => [
            'enableStrictParsing' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // Default Routes...
                'GET /' => 'home/index',

                // Question Routes...
                'GET questions' => 'question/index/index',

                // Authentication Routes...
                'GET connect' => 'auth/auth/connect-form',
                'POST login' => 'auth/auth/login',
                'POST register' => 'auth/auth/register',
                'GET logout' => 'auth/auth/logout',

                // Password Reset Route
                'GET password/forgot' => 'auth/password/forgot-form',
                'POST password/forgot' => 'auth/password/forgot',
                'GET password/reset/<token>' => 'auth/password/reset-form',
                'POST password/reset' => 'auth/password/reset',
                'POST password/email' => 'auth/password/send-email',
            ],
        ],
    ],
];

return $config;
