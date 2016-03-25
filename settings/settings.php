<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 16:51
 */
return [
    'settings' => [
        'displayErrorDetails' => true,

        'view' => [
            'template_folder' => __DIR__ . '/../view/',
        ],

        'database' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'slim',
            'username' => 'root',
            'password' => '',
            'prefix' => '',
            'charset' => 'utf8'
        ]
    ]
];