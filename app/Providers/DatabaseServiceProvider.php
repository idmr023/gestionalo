<?php

namespace App\Providers;

use App\Database\NeonPostgresConnector;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('db.connector.pgsql', function () {
            return new NeonPostgresConnector;
        });
    }
}
