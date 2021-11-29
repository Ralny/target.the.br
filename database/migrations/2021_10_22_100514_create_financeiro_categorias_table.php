<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceiroCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiro_categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('financeiro_categoria_id')->nullable()->constrained();
            $table->foreignId('financeiro_tipo_dre_id')->nullable()->constrained('financeiro_tipo_dres');
            $table->string('desc_categoria');
            $table->char('tipo_categoria',10)->default('Receita');
            $table->foreignId('tenant_id')->nullable()->constrained();
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
        Schema::dropIfExists('financeiro_categorias');
    }
}
