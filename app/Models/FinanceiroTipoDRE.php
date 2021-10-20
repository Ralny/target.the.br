<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceiroTipoDRE extends Model
{
    use HasFactory;

    protected $table = 'financeiro_tipo_dre';

     /**
     * Campos que podem ser atribuídos em massa.
     */
    protected $fillable = [
        'desc_tipo_dre'
    ];

}
