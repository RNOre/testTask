<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log', 'gii'],
    'modules'=>[
        'gii'=>[
            'class'=>'yii\gii\Module'
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
        ],
    ],
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            'csrfParam' => '_csrf-backend',
        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
//        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
            'rules' =>[
//                '' => 'test/index',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                ['class' => 'yii\rest\UrlRule', 'controller' => 'test'],
            ]
        ],
    ],
    'params' => $params,
];
