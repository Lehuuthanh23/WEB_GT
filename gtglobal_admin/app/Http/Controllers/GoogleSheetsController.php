<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;

class GoogleSheetsController extends Controller
{
    protected $googleSheetsService;

    public function __construct(GoogleSheetsService $googleSheetsService)
    {
        $this->googleSheetsService = $googleSheetsService;
    }

    public function appendRow(Request $request)
    {
        $spreadsheetId = '1xCWLvP4NsYHsxk64dM_St85ODHgZGVEnGguIpQvENJ4'; // Thay bằng ID của Google Sheet
        $range = 'Sheet1!A1'; // Phạm vi thêm dữ liệu (ví dụ: Sheet1, cột A trở đi)
        $values = [
            [$request->input('column1'), $request->input('column2'), $request->input('column3')] // Dữ liệu cần thêm
        ];

        try {
            $this->googleSheetsService->appendRow($spreadsheetId, $range, $values);
            return response()->json(['message' => 'Row appended successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}