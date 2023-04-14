<?php

namespace App\Services;

use App\Models\SheetConfiguration;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class SheetService
{
    public function all(): Collection
    {
       return SheetConfiguration::with('columnMatchings')->get();
    }

    public function truncateConfigurationTables(Collection $sheetConfigurations): void
    {
        foreach ($sheetConfigurations as $sheetConfiguration) {
            DB::table($sheetConfiguration->table)->truncate();  
        }
    }

    public function getMatchingsSimplified(Collection $matchings): array
    {
        $matchingsSimplified = [];
        foreach ($matchings as $matching) {
            $matchingsSimplified[$matching->sheet_column] = $matching->table_column;
        }

        return $matchingsSimplified;
    }

    public function persistSheetData(array $googleSheetData, SheetConfiguration $sheetConfiguration, array $matchings) 
    {
        for ($i = 1; $i < count($googleSheetData); $i++) {
            $DBrow = [];

            for ($j = 0; $j < count($googleSheetData[$i]); $j++) {
                $spreadSheetColName = $googleSheetData[0][$j];
                $dbColName = $matchings[$spreadSheetColName];
                $DBrow[$dbColName] = $googleSheetData[$i][$j];
            }

            DB::table($sheetConfiguration->table)->insert($DBrow);   
        }
    }
    
}
