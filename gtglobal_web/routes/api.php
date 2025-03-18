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
            'articles_with_relationships.enabled as article_enable' // Thêm enable
        )
        ->get();

    // Gom nhóm theo tag_id
    $formattedResults = $results->groupBy('tag_id')
        ->map(function ($articles, $tagId) {
            return [
                'id' => $tagId,
                'name' => $articles->first()->tag_name, 
                'articles' => $articles
                    ->filter(fn($article) => !is_null($article->article_id))
                    ->map(function ($article) {
                        // Tách URL ảnh từ trong nội dung
                        $imageUrl = null;
                        if (preg_match('/<img[^>]+src="([^"]+)"/', $article->article_content, $matches)) {
                            $imageUrl = $matches[1];
                        }
                        return [
                            'id'        => $article->article_id,
                            'title'     => $article->article_title,
                            'image'     => $imageUrl,
                            'create_at' => $article->article_published_at,
                            'enabled'    => $article->article_enable, // Lấy giá trị enable
                        ];
                    })
                    ->values(),
            ];
        })
        ->values();

    return response()->json($formattedResults);
});

Route::get('/portfolioDetails/{id}', function ($id) {
    // Lấy chi tiết bài viết
    $result = DB::table('articles_with_relationships')
        ->select('*')
        ->where('id', $id)
        ->first();

    if (!$result) {
        return response()->json(['message' => 'Không tìm thấy bản ghi'], 404);
    }

    $data = $result; // Giữ nguyên object

    // Xử lý perex để tách description và image_url
    if (isset($data->perex)) {
        $perex = $data->perex;
        $data->description = '';
        $data->image_url = [];

        if (preg_match_all('/<img[^>]+src=["\'](.*?)["\']/i', $perex, $matches)) {
            $data->image_url = $matches[1];
            $data->description = trim(strip_tags($perex));
        } else {
            $data->description = trim($perex);
        }
        unset($data->perex);
    }

    // Lấy danh sách tags liên quan đến bài viết
    $tags = DB::table('tags')
        ->leftJoin('articles_with_relationship_tag', 'tags.id', '=', 'articles_with_relationship_tag.tag_id')
        ->leftJoin('articles_with_relationships', 'articles_with_relationships.id', '=', 'articles_with_relationship_tag.articles_with_relationship_id')
        ->select('tags.id as tag_id', 'tags.name as tag_name')
        ->where('articles_with_relationships.id', $id)
        ->get();

    // Chuyển tags thành chuỗi hoặc mảng tùy số lượng
    $tagNames = $tags->pluck('tag_name')->all();
    $tagsOutput = count($tagNames) === 1 ? $tagNames[0] : $tagNames; // Nếu chỉ có 1 tag thì trả chuỗi, còn không thì trả mảng

    // Chuyển $data thành mảng và thêm tags vào
    $response = (array) $data; // Chuyển object thành mảng
    $response['tags_name'] = $tagsOutput; // Thêm tags vào response

    return response()->json($response);
});