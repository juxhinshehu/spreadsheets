<?php

namespace App\Services;

class SpreadSheetApiFacade
{
    /** @var \Google_Service_Sheets */
    private \Google_Service_Sheets $service;

    public function __construct()
    {
        $client = new \Google_Client();
        $client->setApplicationName('Google Sheets API');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $path = storage_path('config.json');
        $client->setAuthConfig($path);
        $this->service = new \Google_Service_Sheets($client);
    }

    public function retrieve(string $spreadsheetGoogleId, string $sheet): array
    {
        $spreadsheet = $this->service->spreadsheets->get($spreadsheetGoogleId);
        $range = $sheet;
        $response = $this->service->spreadsheets_values->get($spreadsheetGoogleId, $range);
        return $response->getValues();
    }
}
