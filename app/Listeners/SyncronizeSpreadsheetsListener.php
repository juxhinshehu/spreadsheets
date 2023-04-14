<?php

namespace App\Listeners;

use App\Events\SyncronizeSpreadsheetsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\SheetService;
use App\Services\SpreadSheetApiFacade;

class SyncronizeSpreadsheetsListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SyncronizeSpreadsheetsEvent $event): void
    {
        $sheetService = new SheetService();
        $spreadsheetApiFacade = new SpreadSheetApiFacade();

        $sheetConfigurations = $sheetService->all();
        $sheetService->truncateConfigurationTables($sheetConfigurations);


        foreach ($sheetConfigurations as $sheetConfiguration) {
            $googleSheetData = $spreadsheetApiFacade->retrieve($sheetConfiguration->spreadsheet_google_id, $sheetConfiguration->sheet);
            
            $matchings = $sheetService->getMatchingsSimplified($sheetConfiguration->columnMatchings);
            
            $sheetService->persistSheetData($googleSheetData, $sheetConfiguration, $matchings);
        }
    }
}
