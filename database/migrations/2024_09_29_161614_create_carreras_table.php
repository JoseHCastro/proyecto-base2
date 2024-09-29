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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('Sigla')->nullable();
            $table->string('Nombre_Carrera');
            $table->string('Modalidad');
            $table->string('Localidad')->nullable();

            $table->unsignedBigInteger('Facultad_ID');

            $table->foreign('Facultad_ID')
                ->references('id')
                ->on('facultads')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
