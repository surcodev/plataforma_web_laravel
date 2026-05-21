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
        Schema::table('properties', function (Blueprint $table) {
            // Agregamos el campo después de 'price' para que haya orden en la base de datos.
            // Como tu precio original es int, aquí lo ponemos int (o puedes usar decimal si lleva centavos).
            // Le ponemos nullable() por si hay propiedades antiguas que aún no tienen precio en dólares.
            $table->integer('price_dolar')->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            // Si nos arrepentimos, esto borra la columna
            $table->dropColumn('price_dolar');
        });
    }
};
