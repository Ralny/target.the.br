<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;

class FinanceiroCategoria extends Model
{
    use Tenantable;

    protected $guarded = ['id'];

    protected $hidden = [

    ];

    public function categories()
    {
        return $this->hasMany(FinanceiroCategoria::class, 'financeiro_categoria_id');
    }

    public function childCategories()
    {
        return $this->hasMany(FinanceiroCategoria::class, 'financeiro_categoria_id')->with('categories');
    }
}

/**
 * Consulta utilizada
 * https://www.itechempires.com/2019/09/how-to-define-laravel-hasmany-recursive-relationship-with-subitems/
 * https://laraveldaily.com/eloquent-recursive-hasmany-relationship-with-unlimited-subcategories/
 */
