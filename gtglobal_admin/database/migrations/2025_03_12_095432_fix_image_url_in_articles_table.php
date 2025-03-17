<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class FixImageUrlInArticlesTable extends Migration
{
    public function up()
    {
        // Kiểm tra xem cột 'image_url' đã tồn tại chưa, nếu chưa thì thêm vào
        if (!Schema::hasColumn('articles', 'image_url')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->text('image_url')->nullable(); // Thêm cột nếu chưa có
            });
        }

        // Lấy tất cả bài viết có image_url không rỗng
        $articles = DB::table('articles')->whereNotNull('image_url')->get();

        foreach ($articles as $article) {
            // Decode chuỗi bị escape thừa
            $fixedImageUrl = json_decode(stripslashes($article->image_url), true);
            if ($fixedImageUrl) {
                // Lưu lại dưới dạng JSON đúng
                DB::table('articles')
                    ->where('id', $article->id)
                    ->update(['image_url' => json_encode($fixedImageUrl)]);
            }
        }
    }

    public function down()
    {
        // Xóa cột 'image_url' nếu muốn rollback
        if (Schema::hasColumn('articles', 'image_url')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropColumn('image_url');
            });
        }
    }
}
