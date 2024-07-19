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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->index()->constrained();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('blog_title');
            $table->string('blog_slug')->unique();
            $table->text('blog_content')->nullable();
            $table->string('blog_img')->nullable();
            $table->string('blog_readtime');
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
