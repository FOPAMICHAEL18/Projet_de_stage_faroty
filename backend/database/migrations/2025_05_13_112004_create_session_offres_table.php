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
        Schema::create('session_offres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('directrice_id');
            $table->string('name');
            $table->string('name_offre');
            $table->timestamp('create_offre')->useCurrent();
            $table->date('delete_offre');
            $table->string('metier');
            $table->string('contrat');
            $table->string('duree_contrat');
            $table->string('niveau_etude');
            $table->string('niveau_experience');
            $table->string('localisation');
            $table->longText('description');
            $table->longText('profil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_offres');
    }
};
