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
    $danhmuc = DB::table('tags')->leftJoin('articles_with_relationship_tag', 'tags.id', '=', 'articles_with_relationship_tag.tag_id')->leftJoin('articles_with_relationships', 'articles_with_relationships.id', '=', 'articles_with_relationship_tag.articles_with_relationship_id')->select('tags.id as tag_id', 'tags.name as tag_name', 'articles_with_relationships.id as article_id', 'articles_with_relationships.title as article_title', 'articles_with_relationships.perex as article_content', 'articles_with_relationships.published_at as article_published_at', 'articles_with_relationships.enabled as article_enable')->get();

    $formattedResults = $danhmuc
        ->groupBy('tag_id')
        ->map(function ($articles, $tagId) {
            return [
                'id' => $tagId,
                'name' => $articles->first()->tag_name,
                'articles' => $articles
                    // Chỉ lấy bài viết có enable = 1
                    ->filter(fn($article) => $article->article_enable == 1)
                    ->map(function ($article) {
                        $imageUrl = null;
                        if (preg_match('/<img[^>]+src="([^"]+)"/', $article->article_content, $matches)) {
                            $imageUrl = $matches[1];
                        }
                        return [
                            'id' => $article->article_id,
                            'title' => $article->article_title,
                            'image' => $imageUrl,
                            'create_at' => $article->article_published_at,
                            'enabled' => $article->article_enable,
                        ];
                    })
                    ->values(),
            ];
        })
        ->values();

    // Sau đó trả ra view
    return view('archite/portfolio', compact('formattedResults'));
});

Route::get('/recruitment', function () {
    $exports = DB::select('SELECT * FROM exports');
    return view('archite/recruitment', compact('exports'));
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

Route::get('/portfolioDetails-{id}', function ($id) {
    $result = DB::table('articles_with_relationships')->select('*')->where('id', $id)->first();

    if (!$result) {
        return redirect()->back()->with('error', 'Không tìm thấy bản ghi');
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

    // Lấy tag đầu tiên liên quan đến bài viết
    $tag = DB::table('tags')->leftJoin('articles_with_relationship_tag', 'tags.id', '=', 'articles_with_relationship_tag.tag_id')->leftJoin('articles_with_relationships', 'articles_with_relationships.id', '=', 'articles_with_relationship_tag.articles_with_relationship_id')->select('tags.name as tag_name')->where('articles_with_relationships.id', $id)->first(); // Chỉ lấy bản ghi đầu tiên

    // Gán tag_name, nếu không có tag thì để rỗng
    $tag_name = $tag ? $tag->tag_name : '';

    // Truyền $data và $tag_name vào view
    return view('archite.portfolioDetails', compact('data', 'tag_name'));
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
