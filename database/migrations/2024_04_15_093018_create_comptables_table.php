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
        Schema::create('comptables', function (Blueprint $table) {
            $table->id();
            $table->string('comptable_name');
            $table->string('tel_comptable');
            $table->string('email_comptable')->unique();
           
            $table->foreignId('Entreprise_id')->constrained()->onDelete('restrict')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comptables');
    }
};
