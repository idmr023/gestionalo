<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Console\Command;

class PurgeTrashed extends Command
{
    protected $signature = 'gestionalo:purge-trashed';

    protected $description = 'Force delete trashed items older than 24 hours';

    public function handle(): void
    {
        $cutoff = now()->subDay();

        $count = Service::onlyTrashed()->where('deleted_at', '<', $cutoff)->forceDelete()
               + Project::onlyTrashed()->where('deleted_at', '<', $cutoff)->forceDelete()
               + Post::onlyTrashed()->where('deleted_at', '<', $cutoff)->forceDelete();

        $this->info("Purged {$count} old trashed items.");
    }
}
