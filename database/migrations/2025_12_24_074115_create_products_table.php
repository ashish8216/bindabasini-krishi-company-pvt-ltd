<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku',100)->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->json('specifications')->nullable();
            $table->decimal('price',10,2);
            $table->decimal('compare_price',10,2)->nullable();
            $table->decimal('cost_price',10,2)->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('low_stock_threshold')->default(10);
            $table->foreignId('category_id')->constrained()->restrictOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained()->nullOnDelete();
            $table->string('featured_image');
            $table->enum('status',['active','inactive','out_of_stock','coming_soon'])->default('active');
            $table->enum('type',['physical','digital'])->default('physical');
            $table->decimal('weight',8,2)->nullable();
            $table->string('dimensions')->nullable();
            $table->string('warranty_period')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_bestseller')->default(false);
            $table->boolean('is_new_arrival')->default(false);
            $table->boolean('is_on_sale')->default(false);
            $table->decimal('rating',3,2)->default(0.00);
            $table->integer('total_reviews')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->timestamps();

            $table->index('category_id');
            $table->index('brand_id');
            $table->index('status');
            $table->index('is_featured');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
