<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinistryOfIndustryAndTradeLinkToSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('ministry_of_industry_and_trade_link')->nullable(); // Thêm trường link Bộ Công Thương
        });
    }

    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('ministry_of_industry_and_trade_link');
        });
    }
}