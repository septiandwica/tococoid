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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_slug');
            $table->string('product_name');
            $table->string('product_varian');
            $table->text('product_desc');
            $table->decimal('product_selling', 10, 2);
            $table->string('faq_question_1')->nullable();
            $table->string('faq_answer_1')->nullable();
            $table->string('faq_question_2')->nullable();
            $table->string('faq_answer_2')->nullable();
            $table->string('faq_question_3')->nullable();
            $table->string('faq_answer_3')->nullable();
            $table->string('product_img_1')->nullable();
            $table->string('product_img_2')->nullable();
            $table->string('product_img_3')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
