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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Relación con User
            $table->string('name');
            $table->string('business_name'); // Razón social
            $table->string('rfc')->unique();
            $table->string('economic_activity');
            $table->string('invoice_email'); // Email para recepción de facturas
            $table->string('address'); // Dirección con asentamiento
            $table->string('state');
            $table->string('city');
            $table->string('zip_code');
            $table->string('referral_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
