<?php

$config = [
    'id' => 'minimal',
    'basePath' => dirname(__DIR__),
    'viewPath' => dirname(__DIR__) . '/resources/views',

    'timeZone' => 'Europe/Moscow',
    'language' => 'ru-RU',
    //'language' => 'en-US',

    'bootstrap' => [
        'debug',
        'gii',
    ],

    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],

    'components' => [
        'setting' => [
            'class' => 'app\components\setting\Setting',
        ],
        'formatter' => [
            'class' => 'app\components\formatter\Formatter',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'request' => [
            'cookieValidationKey' => 'jaklesHtNzHONAxk2Ca6UjR49iHgN_9U',
        ],
        'view' => [
            'class' => 'app\components\view\View',
        ],
        'role' => [
            'class' => 'app\components\role\RoleManager',
        ],
        'user' => [
            'class' => 'app\components\user\User',
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yiibb',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => '',
        ],
        'urlManager' => [
            'enableStrictParsing' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // Default Routes...
                'GET /' => 'home/index',

                // Home Routes...
                'GET terms' => 'home/terms',

                // Authentication Routes...
                'GET login' => 'auth/auth/login-form',
                'POST login' => 'auth/auth/login',
                'GET register' => 'auth/auth/register-form',
                'POST register' => 'auth/auth/register',
                'GET logout' => 'auth/auth/logout',

                // Password Reset Route
                'GET password/forgot' => 'auth/password/forgot-form',
                'POST password/forgot' => 'auth/password/forgot',
                'GET password/reset/<token>' => 'auth/password/reset-form',
                'POST password/reset' => 'auth/password/reset',
                'POST password/email' => 'auth/password/send-email',

                // User Routes...
                'GET user/<id:\d+>' => 'user/view',
                'GET list' => 'user/list',

                // Forum Routes...
                'GET forum/<id:\d+>/page/<page:\d+>' => 'forum/view',
                'GET forum/<id:\d+>' => 'forum/view',

                // Topic Routes...
                'GET topic/<id:\d+>/page/<page:\d+>' => 'topic/view',
                'GET topic/<id:\d+>' => 'topic/view',

                // Post Routes...
                'GET post/<id:\d+>' => 'post/view',

                // Search Routes...
                'GET search' => 'search/index',
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/resources/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app/navigation' => 'navigation.php',
                    ],
                ],
            ],
        ],
    ],
];

return $config;
