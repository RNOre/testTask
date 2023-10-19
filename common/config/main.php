<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            // you will configure your module inside this file
            // or if need different configuration for frontend and backend you may
            // configure in needed configs
        ],
//        'mailer' => [
//            'sender'                => 'no-reply@myhost.com', // or ['no-reply@myhost.com' => 'Sender name']
//            'welcomeSubject'        => 'Welcome subject',
//            'confirmationSubject'   => 'Confirmation subject',
//            'reconfirmationSubject' => 'Email change subject',
//            'recoverySubject'       => 'Recovery subject',
//        ],
    ],
//    'mailer' => [
//        'class' => 'yii\swiftmailer\Mailer',
//        'viewPath' => '@app/mailer',
//        'useFileTransport' => true,
//        'transport' => [
//            'class' => 'Swift_SmtpTransport',
//            'host' => 'your-host-domain e.g. smtp.gmail.com',
//            'username' => 'your-email-or-username',
//            'password' => 'your-password',
//            'port' => '587',
//            'encryption' => 'tls',
//        ],
//    ],
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mailer',
            'useFileTransport' => true,
//            'transport' => [
//                'dsn' => 'smtp://user:pass@smtp.example.com:465',
//                'class' => 'Swift_SmtpTransport',
//                'host' => '56romanadamovich56@gmail.com',
//                'username' => '56romanadamovich56@gmail.com',
//                'password' => 'hjvf344807',
//                'port' => '587',
//                'encryption' => 'tls',
//            ],
        ],
//        'user' => [
//            'class' => 'dektrium\user\Module',
//            'enableUnconfirmedLogin' => true,
//            'enableGeneratingPassword' => true,
//            'enablePasswordRecovery' => true,
//            'enableConfirmation' => false,
//            'confirmWithin' => 21600,
//            'cost' => 12,
//            'admins' => ['admin']
//        ],
    ],
];
