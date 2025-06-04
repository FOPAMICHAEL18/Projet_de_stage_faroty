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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name_offre');
            $table->date('delete_offre');
            $table->string('metier');
            $table->string('contrat');
            $table->string('duree_contrat');
            $table->string('niveau_etude');
            $table->string('niveau_experience');
            $table->string('localisation');
            $table->string('language');
            $table->longText('description');
            $table->longText('profil');
            $table->boolean('status')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
