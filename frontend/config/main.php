<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii', 'debug'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module'
        ],
        'debug' => [
            'class' => 'yii\debug\Module'
        ],
        'user' => [
            // following line will restrict access to admin controller from frontend application
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu', // it can be '@path/to/your/layout'.
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'app\models\User',
                    'idField' => 'user_id'
                ],
                'other' => [
                    'class' => 'path\to\OtherController', // add another controller
                ],
            ],
            'menus' => [
                'assignment' => [
                    'label' => 'Grand Access' // change label
                ],
                'route' => null, // disable menu route
            ]
        ],
        'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            'allowActions' => [
                'site/login',
                'site/error',
            ]
        ]
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => '1081605936273-10rsd3ppcjul62rl5sttdces3me9eeqg.apps.googleusercontent.com',
                    'clientSecret' => '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',
                ],
                'vkontakte' => [
                    'class' => 'dektrium\user\clients\VKontakte',
                    'clientId' => '51781657',
                    'clientSecret' => 'kywFTNnf7PBWdT5VoETB',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => 'facebook_client_id',
                    'clientSecret' => 'секретный_ключ_facebook_client',
                ],
                // и т.д.
            ],
        ],
        // ...
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
                'text/json' => 'yii\web\JsonParser',
            ],
            'csrfParam' => '_csrf-frontend',
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        ],
        'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            'allowActions' => [
                'admin/*', // add or remove allowed actions to this list
            ],
        ],
        'jwt' => [
            'class' => \sizeg\jwt\Jwt::class,
            'key' => 'SECRET-KEY',  //typically a long random string
            'jwtValidationData' => \app\components\JwtValidationData::class,
        ],
        'cors' => [
            'class' => \yii\filters\Cors::class,
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Allow-Origin' => ['*'],
                'Access-Control-Allow-Methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
                'Access-Control-Allow-Headers' => ['Origin', 'Content-Type', 'Authorization'],
                'Access-Control-Allow-Credentials' => true,
            ],
        ],
//        'user' => [
//            'class' => 'dektrium\user\Module',
//            'enableUnconfirmedLogin' => true,
//            'confirmWithin' => 21600,
//            'cost' => 12,
//            'admins' => ['admin']
//        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
//        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'response' => [
            'formatters' => [
                \yii\web\Response::FORMAT_JSON => [
                    'class' => 'yii\web\JsonResponseFormatter',
                    'prettyPrint' => YII_DEBUG, // use "pretty" output in debug mode
                    'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            ]
        ],
    ],
    'params' => $params,
];
