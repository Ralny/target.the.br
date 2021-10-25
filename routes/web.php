<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
    Route::get('/dashboard', [PagesController::class, 'index'])->name('dashboard');

    //Usuario
    Route::get('/users', [UserList::class, '__invoke'])->name('users');

    //Financeiro
    Route::get('/financeiro/categorias', [FinanceiroCategoriaReceita::class, '__invoke'])->name('categorias');

    // Quick search dummy route to display html elements in search dropdown (header search)
    Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
});

require __DIR__ . '/auth.php';
