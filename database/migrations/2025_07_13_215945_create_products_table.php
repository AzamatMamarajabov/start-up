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
            $table->foreignId('category_type_id')->constrained()->cascadeOnDelete();
            $table->string('title_uz');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('text_uz')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_ru')->nullable();
            $table->boolean('product_type')->default(1); // 1 = tekin, 0 = pullik
            $table->boolean('type')->default(1); // 1 = tekin, 0 = pullik
            $table->json('images')->nullable();  // multiple images
            $table->string('file')->nullable();  // fayl yuklash
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
