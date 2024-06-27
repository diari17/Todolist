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
        Schema::create('coordonnateurs', function (Blueprint $table) {
            $table->id('IDCo');
            // $table->integer('IDUser')->unsigned();
            $table->unsignedBigInteger('IDUser');
            $table->foreign('IDUser')->references('IDUser')->on('users');
            $table->string('Role')->default('Coordonnateur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordonnateurs');
    }
};
