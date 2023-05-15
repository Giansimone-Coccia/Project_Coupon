<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DomandeController;
use App\Http\Controllers\UtenteController;


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

Route::get('/', [PublicController::class, 'allAziende'])
        ->name('start');

Route::get('/FAQ', [DomandeController::class, 'allFAQ'])
        ->name('FAQ');

Route::get('/offerte_azienda/{aziendaId}', [PublicController::class, 'getAzienda'])
        ->name('offerte_azienda');  

Route::get('/offerte_azienda/{aziendaId}/dettaglio_offerta/{promoId}', [PublicController::class, 'getPromoDetails'])
        ->name('dettaglio_offerta');

Route::get('/area_personale_utente/{username}', [UtenteController::class, 'getInfoUtente'])
        ->name('area_personale_utente');  

Route::get('/area_personale_utente/{username}/lista_coupon/{usernameUtente}', [UtenteController::class, 'getCouponUtente'])
        ->name('lista_coupon');

Route::get('/coupon/{codOfferta}', [PublicController::class, 'getBuono'])
        ->name('coupon');




Route::view('/chi_siamo', 'chi_siamo')
        ->name('chi_siamo');


Route::view('/login', 'login')
        ->name('login');

Route::view('/modifica_profilo_utente', 'modifica_profilo_utente')
        ->name('modifica_profilo_utente');

Route::view('/register', 'register')
        ->name('register');

Route::view('/risultati_page', 'risultati_page')
        ->name('risultati_page');





