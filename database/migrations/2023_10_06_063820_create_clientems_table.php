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
        Schema::create('clientems', function (Blueprint $table) {
            $table->id();

            $table->string('cliente');
            $table->string('contacto');
            $table->enum('forma_pago',  ['Contado', 'Credito']);
            $table->enum('metodo_pago', ['Efectivo', 'Tarjeta', 'Transferencia', 'Cheque']);
            $table->string('tel_celular');
            $table->string('tel_local');
            $table->string('correouno');
            $table->string('correodos');
            $table->string('direccion');
           // $table->string('telefono', 10); // 10 es la longitud máxima del número de teléfono

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientems');
    }
};
