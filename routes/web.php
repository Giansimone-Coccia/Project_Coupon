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


/*Public*/

Route::view('/chi_siamo', 'chi_siamo')
        ->name('chi_siamo');

Route::view('/', 'layouts/public');

Route::get('/', [PublicController::class, 'allAziende'])
        ->name('start');

Route::get('/FAQ', [DomandeController::class, 'allFAQ'])
        ->name('FAQ');

Route::get('/risultati_page', [PublicController::class, 'ricercaPromo'])
        ->name('risultati_page');

Route::get('/offerte_azienda/{aziendaId}', [PublicController::class, 'getAzienda'])
        ->name('offerte_azienda');  

Route::get('/offerte_azienda/{aziendaId}/dettaglio_offerta/{promoId}', [PublicController::class, 'getPromoDetails'])
        ->name('dettaglio_offerta');

Route::get('/dettaglio_offerta/{promoId}', [PublicController::class, 'getPromoDetails'])
        ->name('dettaglio_offerta_ricerca');





/*User*/

Route::get('/user', [PublicController::class, 'start'])
        ->name('user')->middleware('can:isUser');

Route::get('/area_personale_utente', [UtenteController::class, 'getInfoUtente'])
        ->name('area_personale_utente');

Route::get('/area_personale_utente/lista_coupon', [UtenteController::class, 'getCouponUtente'])
        ->name('lista_coupon');

Route::get('/coupon/{codOfferta}', [PublicController::class, 'getBuono'])
        ->name('coupon');





/*Admin*/

Route::get('/admin', [PublicController::class, 'start'])
        ->name('admin');

Route::view('/area_personale_admin', 'area_personale_admin')
        ->name('area_personale_admin');

Route::get('/modifica_azienda/{codiceA}', [PublicController::class, 'viewAzienda'])
        ->name('modifica_azienda');

Route::post('/modifica_azienda/{codiceA}', [PublicController::class, 'modificaAzienda'])
        ->name('modifica_azienda.store');

Route::get('/crea_azienda', [PublicController::class, 'addAzienda'])
        ->name('crea_azienda');

Route::post('/crea_azienda', [PublicController::class, 'storeAzienda'])
        ->name('crea_azienda.store');

Route::get('/area_personale_admin/{username}', [UtenteController::class, 'getInfoAdmin'])
        ->name('area_personale_admin');

Route::get('/modifica_profilo_utente', [UtenteController::class, 'viewModProfUtente'])
        ->name('modifica_profilo_utente');

Route::post('/modifica_profilo_utente', [UtenteController::class, 'modificaProfiloUtente'])
        ->name('modifica_profilo_utente.store');

Route::get('/mostra_aziende_area_personale', [PublicController::class, 'allAziendeAdmin'])
        ->name('mostra_aziende_area_personale');/*con gli helper usiamo questa pagina sia per admin che staff*/

Route::get('/mostra_promo_da_modificare/{aziendaId}', [PublicController::class, 'getOfferteAdmin'])
        ->name('mostra_promo_da_modificare');

Route::post('/elimina_azienda/{aziendaId}', [PublicController::class, 'eliminaAzienda'])
        ->name('elimina_azienda.store');

Route::post('/elimina_membri_staff/{staffId}', [UtenteController::class, 'eliminaStaff'])
        ->name('elimina_membri_staff.store');

Route::get('/crea_faq', [DomandeController::class, 'addFaq'])
        ->name('crea_faq');

Route::post('/crea_faq', [DomandeController::class, 'storeFaq'])
        ->name('crea_faq.store');

Route::get('/modifica_faq/{id}', [DomandeController::class, 'viewFaq'])
        ->name('modifica_azienda');

Route::post('/modifica_faq/{id}', [DomandeController::class, 'modificaFaq'])
        ->name('modifica_faq.store');

Route::get('/crea_membro_staff', [UtenteController::class, 'addMembroStaff'])
        ->name('crea_membro_staff');

Route::post('/crea_membro_staff', [UtenteController::class, 'storeMembroStaff'])
        ->name('crea_membro_staff.store');

Route::get('/mostra_membri_staff', [UtenteController::class, 'allStaffAdmin'])
        ->name('mostra_membri_staff');

Route::get('/mostra_utenti_registrati', [UtenteController::class, 'allRegisteredUsers'])
        ->name('mostra_utenti_registrati');



        
/*Staff*/

Route::get('/crea_offerta', [PublicController::class, 'addOfferta'])
        ->name('crea_offerta');

Route::post('/crea_offerta', [PublicController::class, 'storeOfferta'])
        ->name('crea_offerta.store');

Route::get('/modifica_offerta/{offertaId}', [PublicController::class, 'viewOfferta'])
        ->name('modifica_offerta');

Route::post('/modifica_offerta/{offertaId}', [PublicController::class, 'modificaOfferta'])
        ->name('modifica_offerta.store');

Route::post('/elimina_offerta/{offertaId}', [PublicController::class, 'eliminaOfferta'])
        ->name('elimina_offerta.store');

Route::get('/staff', [PublicController::class, 'start'])
        ->name('staff'); 

Route::view('/area_personale_staff', 'area_personale_staff')
        ->name('area_personale_staff');
