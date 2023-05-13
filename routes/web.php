<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

/*  Rotte aggiunte da Breeze

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

*/
require __DIR__.'/auth.php';

Route::view('/', 'layouts/public');

Route::view('/', 'start')
        ->name('start');

Route::view('/FAQ', 'FAQ')
        ->name('FAQ');

Route::view('/area_personale_utente', 'area_personale_utente')
        ->name('area_personale_utente');

Route::view('/chi_siamo', 'chi_siamo')
        ->name('chi_siamo');

Route::view('/coupon', 'coupon')
        ->name('coupon');

Route::view('/dettaglio_offerta', 'dettaglio_offerta')
        ->name('dettaglio_offerta');

Route::view('/lista_coupon', 'lista_coupon')
        ->name('lista_coupon');

Route::view('/login', 'login')
        ->name('login');

Route::view('/modifica_profilo_utente', 'modifica_profilo_utente')
        ->name('modifica_profilo_utente');

Route::view('/offerte_azienda', 'offerte_azienda')
        ->name('offerte_azienda');

Route::view('/register', 'register')
        ->name('register');

Route::view('/risultati_page', 'risultati_page')
        ->name('risultati_page');





