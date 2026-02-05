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
        Schema::create('assinantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique()->index();
            $table->string('whatsapp', 15)->nullable()->index();
            $table->string('instagram')->nullable();
            $table->boolean('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assinantes');
    }
};
