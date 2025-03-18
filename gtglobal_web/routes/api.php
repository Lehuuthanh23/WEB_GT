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
// Route::get('test', function () {
//     $articles = DB::select("SELECT * FROM articles_with_relationship_tag");

//     // Giải mã JSON trong từng article
//     // foreach ($articles as &$article) {
//     //     if (!empty($article->image_url)) {
//     //         $article->image_url = json_decode($article->image_url, true);
//     //     }
//     // }

//     return response()->json($articles);
// });
Route::get('test', function () {
    $results = DB::table('tags')
        ->leftJoin('articles_with_relationship_tag', 'tags.id', '=', 'articles_with_relationship_tag.tag_id')
        ->leftJoin('articles_with_relationships', 'articles_with_relationships.id', '=', 'articles_with_relationship_tag.articles_with_relationship_id')
        ->select(
            'tags.id as tag_id',
            'tags.name as tag_name',
            'articles_with_relationships.id as article_id',
            'articles_with_relationships.title as article_title',
            'articles_with_relationships.perex as article_content',
            'articles_with_relationships.published_at as article_published_at',
        )
        ->get();

    // Chuyển đổi dữ liệu từ dạng bảng thành dạng nhóm theo tag_id
    $formattedResults = collect($results) // Đảm bảo danh sách có thể nhóm lại
        ->groupBy('tag_id') // Gom theo tag_id
        ->map(function ($articles, $tagId) {
            return [
                'id' => $tagId,
                'name' => $articles->first()->tag_name, // Lấy tên tag duy nhất
                'articles' => $articles
                    ->filter(fn($article) => !is_null($article->article_id)) // Loại bỏ bài viết null
                    ->map(function ($article) {
                        $imageUrl = null;
                        if (preg_match('/<img[^>]+src="([^"]+)"/', $article->article_content, $matches)) {
                            $imageUrl = $matches[1]; // URL ảnh đầu tiên tìm thấy
                        }
                        return [
                            'id' => $article->article_id,
                            'title' => $article->article_title,
                            'image' => $imageUrl,
                            'create_at' => $article->article_published_at,
                        ];
                    })
                    ->values(), // Reset lại index
            ];
        })
        ->values(); // Reset lại index của danh sách chính


    return response()->json($formattedResults);
});

Route::get('test1', function () {
    return"HFGFGFGFG";
});
