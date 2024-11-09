<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade'); // Liên kết với bảng blogs
            $table->string('name'); // Tên người đánh giá
            $table->string('email'); // Email của người đánh giá
            $table->text('comment'); // Nội dung đánh giá
            $table->boolean('approved')->default(false); // Trạng thái phê duyệt
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_reviews');
    }
};
