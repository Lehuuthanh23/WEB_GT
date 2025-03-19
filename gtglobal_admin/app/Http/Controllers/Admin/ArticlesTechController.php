<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleTech\DestroyArticleTech;
use App\Http\Requests\Admin\ArticleTech\IndexArticleTech;
use App\Http\Requests\Admin\ArticleTech\StoreArticleTech;
use App\Http\Requests\Admin\ArticleTech\UpdateArticleTech;
use App\Models\ArticleTech;
use Brackets\AdminListing\Facades\AdminListing;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticlesTechController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexArticleTech $request
     * @return Response|array
     */
    public function index(IndexArticleTech $request)
{
    $data = AdminListing::create(ArticleTech::class)->processRequestAndGet(
        $request,
        ['id', 'title', 'perex' ,'published_at', 'enabled', 'updated_by_admin_user_id', 'updated_at', 'image_url'],
        ['id', 'title', 'perex'],
        function ($query) use ($request) {
            $query->with(['updatedByAdminUser']);
        }
    );
    $data->transform(function ($item) {
        $item->image_url = json_decode($item->image_url, true) ?? [];
        return $item;
    });
    if ($request->ajax()) {
        if ($request->has('bulk')) {
            return [
                'bulkItems' => $data->pluck('id')
            ];
        }

        return ['data' => $data->toArray()];
    }

    return view('admin.article-tech.index', ['data' => $data]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.article.create-tech');

        return view('admin.article-tech.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreArticleTech $request
     * @return Response|array
     */
    // public function store(StoreArticleTech $request)
    // {
    //     // dump('hahahaha');
    //     // dump($request->all());
    //     // Sanitize input
    //     $sanitized = $request->validated();
    //     $sanitized['image_url'] = $image_url;
    //     $sanitized['updated_by_admin_user_id'] = Auth::getUser()->id;

    //     // Store the Article
    //     $article = Article::create($sanitized);

    //     if ($request->ajax()) {
    //         return ['redirect' => url('admin/tin-tuc'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
    //     }

    //     return redirect('admin/tin-tuc');
    // }
    public function store(StoreArticleTech $request)
{
    $sanitized = $request->validated();
    $sanitized['updated_by_admin_user_id'] = Auth::getUser()->id;
    $perex = $sanitized['perex'];

    $doc = new \DOMDocument();
    @$doc->loadHTML('<meta charset="utf-8">' . $perex);
    $images = $doc->getElementsByTagName('img');
    $imageUrls = [];

    // Lấy danh sách URL của ảnh
    foreach ($images as $img) {
        $url = $img->getAttribute('src');
        $imageUrls[] = $url;
    }

    // Lưu danh sách ảnh dưới dạng JSON hợp lệ
    $sanitized['image_url'] = $imageUrls ? json_encode($imageUrls, JSON_UNESCAPED_SLASHES) : null;

    // Xóa tất cả thẻ <img> khỏi DOM
    while ($images->length > 0) {
        $images->item(0)->parentNode->removeChild($images->item(0));
    }

    // Lấy phần nội dung còn lại (sau khi xóa ảnh)
    $descContent = $doc->saveHTML($doc->getElementsByTagName('body')->item(0));
    $descContent = preg_replace('/^<body>|<\/body>$/', '', $descContent);

    // Lưu vào cột `desc`
    $sanitized['description'] = trim($descContent);

    // Store the Article
    $article = ArticleTech::create($sanitized);

    if ($request->ajax()) {
        return ['redirect' => url('admin/tin-tuc-tech'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
    }

    return redirect('admin/tin-tuc-tech');
}

    /**
     * Display the specified resource.
     *
     * @param ArticleTech $article
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @return void
     */
    public function show(ArticleTech $article)
    {
        $this->authorize('admin.article.show-tech', $article);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ArticleTech $article
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @return Response
     */
    public function edit(ArticleTech $article)
    {
        $this->authorize('admin.article.edit-tech', $article);

        $article->load('updatedByAdminUser');

        return view('admin.article-tech.edit', [
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateArticleTech $request
     * @param ArticleTech $article
     * @return Response|array
     */
    // public function update(UpdateArticleTech $request, Article $article)
    // {
    //     // Sanitize input
    //     $sanitized = $request->getSanitized();
    //     $sanitized['updated_by_admin_user_id'] = Auth::getUser()->id;

    //     // Update changed values Article
    //     $article->update($sanitized);

    //     if ($request->ajax()) {
    //         return [
    //             'redirect' => url('admin/tin-tuc'),
    //             'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
    //             'object' => $article
    //         ];
    //     }

    //     return redirect('admin/tin-tuc');
    // }
    public function update(UpdateArticleTech $request, ArticleTech $article)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['updated_by_admin_user_id'] = Auth::getUser()->id;

        $perex = $sanitized['perex'];
        $imageUrls = [];

        // Sử dụng DOMDocument để xử lý HTML
        $doc = new \DOMDocument();
        libxml_use_internal_errors(true); // Bỏ qua cảnh báo do loadHTML
        $doc->loadHTML(mb_convert_encoding($perex, 'HTML-ENTITIES', 'UTF-8'));

        $xpath = new \DOMXPath($doc);
        $images = $xpath->query('//img');

        // Duyệt qua từng ảnh để lấy URL và xóa ảnh khỏi nội dung

        foreach ($images as $img) {
            $imageUrls[] = $img->getAttribute('src'); // Lưu URL ảnh
            // $img->parentNode->removeChild($img); // Xóa ảnh khỏi nội dung
        }

        if ($images->length > 0) {
            $firstImg = $images->item(0); // Lấy ảnh đầu tiên
            $firstImg->parentNode->removeChild($firstImg); // Xóa ảnh đầu tiên khỏi nội dung
        }

        // Lấy phần nội dung còn lại sau khi xóa ảnh
        $descContent = $doc->saveHTML($doc->getElementsByTagName('body')->item(0));
        $descContent = preg_replace('/^<body>|<\/body>$/', '', $descContent);
        $sanitized['description'] = trim($descContent);

        // Nếu có ảnh, lưu vào `image_url` dưới dạng JSON
        $sanitized['image_url'] = !empty($imageUrls) ? json_encode(array_values(array_unique($imageUrls)), JSON_UNESCAPED_SLASHES) : json_encode([]);

        // Update article
        $article->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/tin-tuc-tech'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $article
            ];
        }

        return redirect('admin/tin-tuc-tech');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyArticleTech $request
     * @param ArticleTech $article
     * @throws \Exception
     * @return Response|bool
     */
    public function destroy(DestroyArticleTech $request, ArticleTech $article)
    {
        $article->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyArticleTech $request
     * @throws \Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyArticleTech $request) : Response
    {
        DB::transaction(function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(function ($bulkChunk) {
                    ArticleTech::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }
}
