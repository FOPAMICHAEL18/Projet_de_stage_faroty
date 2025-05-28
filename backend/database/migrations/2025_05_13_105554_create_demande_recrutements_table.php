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
        Schema::create('demande_recrutements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chef_departement_id');
            $table->unsignedBigInteger('directrice_id');
            $table->longText('content');
            $table->boolean('status')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_recrutements');
    }
};
