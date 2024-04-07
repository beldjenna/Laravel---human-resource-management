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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('date_nais');
            $table->string('situation_fam');
            $table->integer('nb_enfants');
            $table->date('date_debcont');
            $table->date('date_fincont');
            $table->string('service');
            $table->string('adresse');
            $table->integer('tel');
            $table->string('email');
            $table->date('date_embauche');
            $table->integer('nb_jourconge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
