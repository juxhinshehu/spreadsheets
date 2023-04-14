<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\SyncronizeSpreadsheetsEvent;

class SyncronizeSpreadSheets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'syncronize:spreadsheets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        info(" ------------ Syncronize Spreadsheets ----------------- ". now());
        event(new SyncronizeSpreadsheetsEvent());
        return Command::SUCCESS;
    }
}
