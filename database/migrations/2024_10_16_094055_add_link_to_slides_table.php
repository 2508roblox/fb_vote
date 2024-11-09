<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkToSlidesTable extends Migration
{
    public function up()
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->string('link')->nullable(); // Thêm trường link
        });
    }

    public function down()
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->dropColumn('link'); // Xóa trường link nếu rollback
        });
    }
}