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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->foreignId('categoryForm_id');
            $table->string('cover_image');
            $table->text('presentation');
            $table->text('objectif');
            $table->text('public');
            $table->text('avantage');
            $table->text('modalite');
            $table->text('session');
            $table->float('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
