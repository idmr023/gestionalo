<?php

return [
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'read' => [
                'host' => [
                    env('DB_READ_HOST', env('DB_HOST', '127.0.0.1')),
                ],
            ],
            'write' => [
                'host' => [
                    env('DB_WRITE_HOST', env('DB_HOST', '127.0.0.1')),
                ],
            ],
            'sticky' => env('DB_STICKY', true),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'gestionalo'),
            'username' => env('DB_USERNAME', 'postgres'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => env('DB_SCHEMA', 'public'),
            'sslmode' => 'require',
        ],
    ],

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],
];
