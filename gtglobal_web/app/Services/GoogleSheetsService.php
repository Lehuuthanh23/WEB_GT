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
        try {
            $this->client = new Google_Client();
            $this->client->setApplicationName('Laravel Google Sheets');
            $this->client->setScopes(Google_Service_Sheets::SPREADSHEETS);
            $this->client->setAuthConfig(storage_path('remote-projector-fc831-eef1f4a41efc.json'));
            $this->client->setAccessType('offline');
            $this->client->setPrompt('select_account consent');
            $this->service = new Google_Service_Sheets($this->client);
        } catch (\Exception $e) {
            throw new \Exception('Failed to initialize Google Sheets Service: ' . $e->getMessage());
        }
    }

    /**
     * Lấy dữ liệu từ Google Sheet.
     *
     * @param string $spreadsheetId ID của Google Sheet
     * @param string $range Phạm vi dữ liệu (ví dụ: 'Sheet1!A:A')
     * @return Google_Service_Sheets_ValueRange
     * @throws \Exception
     */
    public function getValues($spreadsheetId, $range)
    {
        try {
            return $this->service->spreadsheets_values->get($spreadsheetId, $range);
        } catch (\Exception $e) {
            throw new \Exception('Failed to get values from Google Sheet: ' . $e->getMessage());
        }
    }

    /**
     * Thêm một dòng vào Google Sheet.
     *
     * @param string $spreadsheetId ID của Google Sheet
     * @param string $range Phạm vi thêm dữ liệu (ví dụ: 'Sheet1!A1')
     * @param array $values Mảng dữ liệu cần thêm
     * @return Google_Service_Sheets_AppendValuesResponse
     * @throws \Exception
     */
    public function appendRow($spreadsheetId, $range, $values)
    {
        try {
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
        } catch (\Exception $e) {
            throw new \Exception('Failed to append row to Google Sheet: ' . $e->getMessage());
        }
    }
}