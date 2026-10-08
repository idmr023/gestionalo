<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Keep serverless Postgres (Neon autosuspend) awake while the app runs.
Schedule::command('db:keepalive')->everyFiveMinutes();
