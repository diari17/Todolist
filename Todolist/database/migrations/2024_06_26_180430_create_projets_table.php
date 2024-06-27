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
        Schema::create('projets', function (Blueprint $table) {
            $table->id('IDProjet');
            $table->string('NomProjet');
            $table->text('Description');
            $table->unsignedBigInteger('IDCP')->nullable();
            // $table->foreign('IDCP')->references('IDCP')->on('chef_projets')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('projets', function (Blueprint $table) {
            $table->foreign('IDCP')->references('IDCP')->on('chef_projets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projets', function (Blueprint $table) {
            $table->dropForeign(['IDCP']);
        });

        Schema::dropIfExists('projets');
    }
};
