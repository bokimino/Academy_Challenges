<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cleanup:vehicles';

    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete soft-deleted records and vehicles with expired insurance dates';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Vehicle::onlyTrashed()->forceDelete();

        Vehicle::where('insurance_date', '<', now())->forceDelete();

        Log::info('CleanupCommand executed successfully.');
    }
}
