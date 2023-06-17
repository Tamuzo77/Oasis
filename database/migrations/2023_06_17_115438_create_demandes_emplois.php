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
        Schema::create('demandes_emplois', function (Blueprint $table) {
            $table->unsignedBigInteger('candidat_id');
            $table->unsignedBigInteger('emploi_id');



            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');
            $table->foreign('emploi_id')->references('id')->on('emplois')->onDelete('cascade');
            $table->primary(['candidat_id', 'emploi_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes_emplois');
    }
};
