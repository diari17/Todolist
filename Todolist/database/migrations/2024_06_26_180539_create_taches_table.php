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
        Schema::create('taches', function (Blueprint $table) {
            $table->id('IDTache');
            $table->string('Titre');
            $table->text('Description');
            $table->date('Due_date');
            $table->string('Status');
            // $table->integer('IDProjet')->unsigned();
            $table->unsignedBigInteger('IDProjet');
            $table->foreign('IDProjet')->references('IDProjet')->on('projets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
