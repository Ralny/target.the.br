<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\Backend\Apps\User\UserForm;
use App\Http\Livewire\Backend\Apps\User\UserList;
use App\Http\Livewire\Backend\Apps\Financeiro\FinanceiroCategoriaReceita;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function () {

    //Dashboard
    Route::get('/dashboard', 'PagesController@index')->name('dashboard');

    Route::get('/users', UserList::class);
    //Route::get('/users/cadastro', UserForm::class);

    //Financeiro
    Route::get('/financeiro/categorias', FinanceiroCategoriaReceita::class);

    //Demo routes metronic
    // Demo routes
    Route::get('/datatables', 'PagesController@datatables');
    Route::get('/ktdatatables', 'PagesController@ktDatatables');
    Route::get('/select2', 'PagesController@select2');
    Route::get('/jquerymask', 'PagesController@jQueryMask');
    Route::get('/icons/custom-icons', 'PagesController@customIcons');
    Route::get('/icons/flaticon', 'PagesController@flaticon');
    Route::get('/icons/fontawesome', 'PagesController@fontawesome');
    Route::get('/icons/lineawesome', 'PagesController@lineawesome');
    Route::get('/icons/socicons', 'PagesController@socicons');
    Route::get('/icons/svg', 'PagesController@svg');

    // Quick search dummy route to display html elements in search dropdown (header search)
    Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
});


require __DIR__ . '/auth.php';
