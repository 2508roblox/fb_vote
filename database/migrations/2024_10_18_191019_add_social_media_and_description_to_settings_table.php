<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialMediaAndDescriptionToSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('facebook')->nullable(); // Thêm trường Facebook
            $table->string('youtube')->nullable();  // Thêm trường YouTube
            $table->string('shopee')->nullable();   // Thêm trường Shopee
            $table->string('zalo')->nullable();      // Thêm trường Zalo
            $table->string('web_icon')->nullable();  // Thêm trường icon web
            $table->text('company_description')->nullable(); // Thêm trường mô tả công ty
        });
    }

    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['facebook', 'youtube', 'shopee', 'zalo', 'web_icon', 'company_description']);
        });
    }
}