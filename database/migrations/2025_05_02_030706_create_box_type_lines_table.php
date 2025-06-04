<?php

use App\Models\BoxType;
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
        Schema::create('box_type_lines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(BoxType::class);
            $table->string('key');
            $table->unsignedInteger('x1');
            $table->unsignedInteger('y1');
            $table->unsignedInteger('x2');
            $table->unsignedInteger('y2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('box_type_lines');
    }
};
