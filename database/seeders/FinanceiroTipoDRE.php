<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FinanceiroTipoDRE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTipoDreDefault();
    }

    private function createTipoDreDefault()
    {
        DB::table('financeiro_tipo_dre')->insert([
            'desc_tipo_dre' => 'Não mostrar no DRE Gerencial'
        ]);

        DB::table('financeiro_tipo_dre')->insert([
            'desc_tipo_dre' => 'Receita de Vendas de Produtos'
        ]);

        DB::table('financeiro_tipo_dre')->insert([
            'desc_tipo_dre' => 'Receitas e Rendimentos Financeiros'
        ]);

        DB::table('financeiro_tipo_dre')->insert([
            'desc_tipo_dre' => 'Outras Receitas Não Operacionais'
        ]);

        //Exibi uma informação no console durante o processo de seed
        $this->command->info('Não mostrar no DRE Gerencial created');
        $this->command->info('Receita de Vendas de Produtos created');
        $this->command->info('Receitas e Rendimentos Financeiros created');
        $this->command->info('Outras Receitas Não Operacionais created');

    }

}
