<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class KeepAliveDb extends Command
{
    protected $signature = 'db:keepalive';

    protected $description = 'Touch the database periodically so serverless Postgres (Neon) does not suspend';

    public function handle(): int
    {
        DB::select('select 1');

        $this->info('Database reachable at '.now()->toDateTimeString());

        return self::SUCCESS;
    }
}
