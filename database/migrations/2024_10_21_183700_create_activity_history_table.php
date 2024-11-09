<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_history', function (Blueprint $table) {
            $table->id();
            $table->timestamp('time'); // Thời gian hoạt động
            $table->unsignedBigInteger('user_id'); // ID của người dùng
            $table->string('activity'); // Hoạt động đã thực hiện
            $table->string('device'); // Thiết bị sử dụng

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Khóa ngoại tham chiếu đến bảng users
            $table->timestamps(); // Timestamps created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_history');
    }
}