<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_tech', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('perex')->nullable();
            $table->date('published_at')->nullable();
            $table->boolean('enabled')->default(false);
            $table->text('image_url')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('updated_by_admin_user_id');
            $table->foreign('updated_by_admin_user_id')->references('id')->on('admin_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_tech');
    }
};
