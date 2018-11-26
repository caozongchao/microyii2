<?php
return [
    'aliases' => [
        '@api' => __DIR__,
    ],
    'id' => 'api-app',
    'basePath' => __DIR__,
    'modules' => [
        'v1' => [
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            // 'rules' => [
            //     [
            //         'class' => 'yii\rest\UrlRule',
            //         'controller' => [
            //             'v1/site',
            //         ],
            //         'pluralize' => false,
            //         'extraPatterns'=>[
            //             // 'GET get-addresses/<id:\d+>' => 'get-addresses',
            //         ],
            //     ],
            // ],
        ],
    ],
];
