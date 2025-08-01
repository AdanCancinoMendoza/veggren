<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_gastos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('categoria');
            $table->string('descripcion');
            $table->decimal('monto', 12, 2);
            $table->timestamps();
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_gastos');
    }
};
