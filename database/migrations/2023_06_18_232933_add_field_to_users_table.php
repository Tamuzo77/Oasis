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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreignId('structure_id')->nullable();
            $table->string('tel')->nullable();
            $table->string('picture')->nullable();
            $table->integer('age')->nullable();
            $table->string('cv_path')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->foreignId('role_id')->default(1);
            $table->foreignId('adresse_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
