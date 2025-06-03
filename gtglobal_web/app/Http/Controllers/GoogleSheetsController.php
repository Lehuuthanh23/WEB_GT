<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
    $range = 'Sheet1!A1'; // Phạm vi thêm dữ liệu (bắt đầu từ cột A)
    $name = $request->input('name'); // Lấy tên từ request
    $email = $request->input('email'); // Lấy email từ request
    $phone = $request->input('phone'); // Lấy số điện thoại từ request
    $content = $request->input('content'); // Lấy nội dung từ request

    try {
        // Lấy số dòng hiện tại trong sheet để tính số thứ tự
        $response = $this->googleSheetsService->getValues($spreadsheetId, 'Sheet1!A:A');
        $rowCount = count($response->getValues()); // Đếm số dòng hiện có
        $rowNumber = $rowCount; // Số thứ tự dòng mới (trừ header, rowCount bắt đầu từ 1)

        // Tạo mảng dữ liệu với cột STT ở đầu
        $values = [
            ["$rowNumber", $name, $email, $phone, $content] // Thêm STT vào cột đầu
        ];

        // Thêm dòng mới vào Google Sheet
        $this->googleSheetsService->appendRow($spreadsheetId, $range, $values);

        // Gửi yêu cầu cURL tới webhook của Make.com
        $client = new Client();
        $webhookUrl = 'https://hook.us2.make.com/8i3coddnhc1jxp2iaec981gxxasufx1h';
        $response = $client->request('POST', $webhookUrl, [
            'query' => [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'content' => $content,
            ],
        ]);

        return response()->json([
            'message' => 'Row appended successfully',
            'row_number' => $rowNumber
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
}