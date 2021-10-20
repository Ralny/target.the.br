<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceiroCategoriaReceita extends Model
{
    use HasFactory;
    /**
     * Campos que podem ser atribuídos em massa.
     */
    protected $fillable = [
        'desc_categoria',
        'id_categoria_receita',
        'id_tipo_dre'
    ];

    protected $hidden = [

    ];

    /**
     * Se não deseja que as colunas [`created_at`,`updated_at`] sejam gerenciadas pelo Eloquentm, definir $timestamps = false.
     */
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(FinanceiroCategoriaReceita::class, 'id_categoria_receita');
    }

    public function childCategories()
    {
        return $this->hasMany(FinanceiroCategoriaReceita::class, 'id_categoria_receita')->with('categories');
    }
}

/**
 * Consulta utilizada
 * https://www.itechempires.com/2019/09/how-to-define-laravel-hasmany-recursive-relationship-with-subitems/
 * https://laraveldaily.com/eloquent-recursive-hasmany-relationship-with-unlimited-subcategories/
 */
