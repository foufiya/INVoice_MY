<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique()->default(date('YmdHis'));
            $table->date('date');
            $table->decimal('montant', 10, 2); // Assuming 10 digits with 2 decimal places for monetary values
            $table->string('etat');
            $table->date('date_paiement')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('Entreprise_id')->constrained()->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
        });
        /*/ Generate invoice number based on current timestamp
        $numero = Carbon::now()->format('YmdHis');
        
        // Insert initial data into the table
        
         DB::table('depenses')->insert([
            'numero' => $numero,
            // Add other initial data as needed
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);*/
        // Generate date from the date of depense
        
        Schema::table('depenses', function (Blueprint $table) {
            $table->index('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depenses');
    }
};