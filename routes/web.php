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

Route::get('/risultati_page/{azienda}&{parola}', [PublicController::class, 'ricercaPromo'])
        ->name('risultati_page');


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

Route::get('/crea_offerta', [PublicController::class, 'addOfferta'])
        ->name('crea_offerta');

Route::get('/area_personale_admin/{username}', [UtenteController::class, 'getInfoAdmin'])
        ->name('area_personale_admin');

Route::post('/crea_offerta', [PublicController::class, 'storeOfferta'])
        ->name('crea_offerta.store');

Route::get('/modifica_offerta/{offertaId}', [PublicController::class, 'viewOfferta'])
        ->name('modifica_offerta');

Route::post('/modifica_offerta/{offertaId}', [PublicController::class, 'modificaOfferta'])
        ->name('modifica_offerta.store');

Route::post('/modifica_profilo_utente/{username}', [UtenteController::class, 'modificaProfiloUtente'])
        ->name('modifica_profilo_utente.store');



Route::view('/modifica_offerta', 'modifica_offerta')
        ->name('modifica_offerta');


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

Route::view('/area_personale_staff', 'area_personale_staff')
        ->name('area_personale_staff');

Route::view('/area_personale_admin', 'area_personale_admin')
        ->name('area_personale_admin');

Route::view('/mostra_aziende_area_personale', 'mostra_aziende_area_personale')
        ->name('mostra_aziende_area_personale');/*con gli helper usiamo questa pagina sia per admin che staff*/





