<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceiroCategoriaReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiro_categoria_receitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desc_categoria');
            $table->unsignedBigInteger('id_categoria_receita')->nullable();
            $table->unsignedBigInteger('id_tipo_dre')->nullable();

            $table->foreign('id_categoria_receita')->references('id')->on('financeiro_categoria_receitas');
            $table->foreign('id_tipo_dre')->references('id')->on('financeiro_tipo_dre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financeiro_categoria_receitas');
    }
}
