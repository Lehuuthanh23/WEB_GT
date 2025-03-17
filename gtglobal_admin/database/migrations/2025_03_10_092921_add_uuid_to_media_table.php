<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUuidToMediaTable extends Migration
{
    public function up()
    {
        Schema::table('media', function (Blueprint $table) {
            if (!Schema::hasColumn('media', 'uuid')) {
                $table->uuid('uuid')->nullable()->after('model_type');
            }
        });
    }

    public function down()
    {
        Schema::table('media', function (Blueprint $table) {
            if (Schema::hasColumn('uuid', 'responsive_images')) {
                $table->dropColumn('uuid');
            }
        });
    }
}
