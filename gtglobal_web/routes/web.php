<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('archite/about');
});

Route::get('/blog', function () {
    $articles = DB::select('SELECT * FROM articles');
    return view('archite/blog', compact('articles'));
});
Route::get('/portfolio', function () {
    // Lấy dữ liệu từ 3 bảng

    $danhmuc = DB::table('tags')->leftJoin('articles_with_relationship_tag', 'tags.id', '=', 'articles_with_relationship_tag.tag_id')->leftJoin('articles_with_relationships', 'articles_with_relationships.id', '=', 'articles_with_relationship_tag.articles_with_relationship_id')->select('tags.id as tag_id', 'tags.name as tag_name', 'articles_with_relationships.id as article_id', 'articles_with_relationships.title as article_title', 'articles_with_relationships.perex as article_content', 'articles_with_relationships.published_at as article_published_at')->get();

    // Gom nhóm lại theo tag_id
    $formattedResults = collect($danhmuc) // Đảm bảo danh sách có thể nhóm lại
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

    // Kiểm tra dữ liệu đúng chưa
    // return response()->json($formattedResults);

    return view('archite/portfolio', compact('formattedResults'));
});

Route::get('/blogDetails', function () {
    return view('archite/blogDetails');
});

Route::get('/contact', function () {
    return view('archite/contact');
});

Route::get('/index', function () {
    return view('archite/index');
});

Route::get('/index-2', function () {
    return view('archite/index-2');
});

Route::get('/index-3', function () {
    return view('archite/index3');
});

Route::get('/portfolioDetails', function () {
    return view('archite/portfolioDetails');
});

Route::get('/projects', function () {
    return view('archite/projects');
});

Route::get('/services', function () {
    return view('archite/services');
});

Route::get('/servicesDetails', function () {
    return view('archite/servicesDetails');
});

Route::get('/team', function () {
    return view('archite/team');
});

Route::get('/teamDetails', function () {
    return view('archite/teamDetails');
});
Route::get('/technology/a-params', function () {
    return view('technology/a-params');
});

Route::get('/technology/blog-single', function () {
    return view('technology/blog-single');
});

Route::get('/technology/blog', function () {
    return view('technology/blog');
});

Route::get('/technology/contact', function () {
    return view('technology/contact');
});

Route::get('/technology/e', function () {
    return view('technology/e');
});

Route::get('/technology/home-2', function () {
    return view('technology/home-2');
});

Route::get('/technology/home-3', function () {
    return view('technology/home-3');
});

Route::get('/technology/index-2', function () {
    return view('technology/index-2');
});

Route::get('/technology/index', function () {
    return view('technology/index');
});
