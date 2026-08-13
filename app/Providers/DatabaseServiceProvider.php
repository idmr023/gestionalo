<?php

namespace App\Providers;

use App\Database\NeonPostgresConnection;
use Illuminate\Database\Connection;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Connection::resolverFor('pgsql', function ($connection, $database, $prefix, $config) {
            return new NeonPostgresConnection($connection, $database, $prefix, $config);
        });
    }
}
