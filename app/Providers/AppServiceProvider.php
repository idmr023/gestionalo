<?php

namespace App\Providers;

use App\Database\NeonPostgresConnector;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('db.connector.pgsql', NeonPostgresConnector::class);
    }

    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->input('email') ?: $request->ip());
        });

        RateLimiter::for('register', function (Request $request) {
            return Limit::perMinute(2)->by($request->ip());
        });

        RateLimiter::for('contact', function (Request $request) {
            return Limit::perMinute(3)->by($request->ip());
        });
    }
}
