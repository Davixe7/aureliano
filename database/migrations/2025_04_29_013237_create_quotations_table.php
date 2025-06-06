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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subcategory_id')->nullable()->constrained('categories')->cascadeOnDelete();
            $table->foreignId('box_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('cardboard_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('lid_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->foreignId('address_id')->constrained()->cascadeOnDelete();
            $table->string('status')->default('pending');
            $table->integer('quantity')->default(1);
            $table->string('product_name');
            $table->string('product_color');
            $table->integer('box_width_mm');
            $table->integer('box_length_mm');
            $table->integer('box_height_mm');
            $table->integer('product_color_qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
