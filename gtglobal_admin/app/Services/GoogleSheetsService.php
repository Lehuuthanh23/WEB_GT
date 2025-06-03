<?php

namespace App\Services;

use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;

class GoogleSheetsService
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Laravel Google Sheets');
        $this->client->setScopes(Google_Service_Sheets::SPREADSHEETS);
        $this->client->setAuthConfig(storage_path('remote-projector-fc831-eef1f4a41efc.json'));
        $this->service = new Google_Service_Sheets($this->client);
    }

    public function appendRow($spreadsheetId, $range, $values)
    {
        $valueRange = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);

        $params = [
            'valueInputOption' => 'RAW'
        ];

        return $this->service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $valueRange,
            $params
        );
    }
}