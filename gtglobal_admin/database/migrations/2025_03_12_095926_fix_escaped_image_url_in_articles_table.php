<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class FixEscapedImageUrlInArticlesTable extends Migration
{
    public function up()
    {
        $articles = DB::table('articles')->whereNotNull('image_url')->get();

        foreach ($articles as $article) {
            // Thử decode chuỗi escape thừa
            $fixedImageUrl = json_decode(stripslashes($article->image_url), true);
            if ($fixedImageUrl && is_array($fixedImageUrl)) {
                DB::table('articles')
                    ->where('id', $article->id)
                    ->update(['image_url' => json_encode($fixedImageUrl)]);
            } elseif (is_string($article->image_url)) {
                // Nếu đã là JSON hợp lệ, decode rồi encode lại để chắc chắn
                $decoded = json_decode($article->image_url, true);
                if ($decoded && is_array($decoded)) {
                    DB::table('articles')
                        ->where('id', $article->id)
                        ->update(['image_url' => json_encode($decoded)]);
                }
            }
        }
    }

    public function down()
    {
        // Không cần rollback
    }
}