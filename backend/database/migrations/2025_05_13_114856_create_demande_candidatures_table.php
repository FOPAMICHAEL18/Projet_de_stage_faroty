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
        Schema::create('demande_candidatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offre_id')->constrained('offres');
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('adresse')->nullable();
            $table->string('lettre_motivation')->nullable();
            $table->string('lettre_recommandation')->nullable();
            $table->string('niveau_experience');
            $table->string('niveau_etude');
            $table->string('cv');
            $table->string('langue');
            $table->string('photo_cni')->nullable();
            $table->string('plan')->nullable();
            $table->boolean('status')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_candidatures');
    }
};
