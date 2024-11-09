<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_counts', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Ngày
            $table->integer('hour')->nullable(); // Giờ (0-23)
            $table->integer('activity_count')->default(0); // Số lượng hoạt động
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
        Schema::dropIfExists('activity_counts');
    }
}