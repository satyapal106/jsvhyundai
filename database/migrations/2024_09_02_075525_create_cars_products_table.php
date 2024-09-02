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
        Schema::create('cars_products', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('car_name');
            $table->string('car_url');
            $table->string('car_image');
            $table->string('alt_text');
            $table->string('banner_image');
            $table->text('feature1');
            $table->text('feature2');
            $table->text('feature3');
            $table->longText('description');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars_products');
    }
};
