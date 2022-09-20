<?php

$config = [
    'modules' => [
        'order' => [
            'class' => 'app\modules\orders\Orders',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['172.20.0.1'] // adjust this to your needs
        ],

    ],
];