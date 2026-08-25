<?php

return [
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'options' => [
                PDO::ATTR_EMULATE_PREPARES => true,
            ],
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => env('DB_SCHEMA', 'gestionalo'),
            'sslmode' => 'require',
            'migrations' => [
                'allow_transactions' => false,
            ],
        ],
    ],

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],
];
