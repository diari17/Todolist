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
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id('IDAdmin');
            // $table->integer('IDUser')->unsigned();
            $table->unsignedBigInteger('IDUser'); // Clé étrangère vers la table users
            $table->foreign('IDUser')->references('IDUser')->on('users')->onDelete('cascade');
            $table->string('Role')->default('Administrateur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateurs');
    }
};
