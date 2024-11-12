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
        Schema::create('vote_codes', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->string('code')->unique(); // The vote code
            $table->boolean('is_used')->default(false); // To track if the code has been used
            $table->timestamps(); // Created at and updated at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote_codes');
    }
};
