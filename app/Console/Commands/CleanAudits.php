<?php

namespace App\Console\Commands;

use App\Models\ModelAudit;
use Illuminate\Console\Command;

class CleanAudits extends Command
{
    protected $signature = 'gestionalo:clean-audits';

    protected $description = 'Delete audit records older than 7 days';

    public function handle(): void
    {
        $deleted = ModelAudit::where('created_at', '<', now()->subDays(7))->delete();
        $this->info("Cleaned {$deleted} old audit records.");
    }
}
