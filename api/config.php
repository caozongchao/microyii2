<?php
return [
    'aliases' => [
        '@api' => __DIR__,
    ],
    'id' => 'api-app',
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'api\v1\controllers',
    'modules' => [
        'buyer' => [
            'class' => 'api\v1\Module',
        ],
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.0.250;dbname=test',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'user' => [
            'identityClass' => 'api\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
        ],
    ],
];
