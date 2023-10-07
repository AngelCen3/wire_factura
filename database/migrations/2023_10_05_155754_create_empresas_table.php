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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();

            $table->string('rfc_empresa', 13);
            $table->string('nombre_empresa', 250);
            $table->string('cod_postal', 10)->nullable();
            $table->string('cod_regimen_fiscal', 250)->nullable();
            $table->integer('timbres_usados')->nullable();
            $table->integer('timbres_disponibles')->nullable();
            $table->dateTime('fecha_reg');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
