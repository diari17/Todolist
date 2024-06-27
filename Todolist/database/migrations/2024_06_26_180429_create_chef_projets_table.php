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
        Schema::create('chef_projets', function (Blueprint $table) {
            $table->id('IDCP');
            $table->unsignedBigInteger('IDUser');
            // $table->foreign('IDUser')->references('IDUser')->on('users')->onDelete('cascade');
            $table->string('Role')->default('Chef de Projet');
            $table->unsignedBigInteger('IDProjet')->nullable();
            // $table->foreign('IDProjet')->references('IDProjet')->on('projets')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('chef_projets', function (Blueprint $table) {
            $table->foreign('IDUser')->references('IDUser')->on('users')->onDelete('cascade');
            // $table->foreign('IDProjet')->references('IDProjet')->on('projets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chef_projets', function (Blueprint $table) {
            $table->dropForeign(['IDUser']);
            $table->dropForeign(['IDProjet']);
        });

        Schema::dropIfExists('chef_projets');
    }
};
