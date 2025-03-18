<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/chat', [ChatController::class, 'chatAI']);
Route::get('test', function () {
    $articles = DB::select("SELECT * FROM exports");

    // Giải mã JSON trong từng article
    // foreach ($articles as &$article) {
    //     if (!empty($article->image_url)) {
    //         $article->image_url = json_decode($article->image_url, true);
    //     }
    // }

    return response()->json($articles);
});

Route::get('test1', function () {
    return"HFGFGFGFG";
});
