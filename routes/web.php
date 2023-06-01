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

Route::get('/indietro', function () {
    return redirect()->back();
})->name('indietro');


/*Rotte per più tipi di utenti*/

Route::get('/modifica_profilo_utente', [UtenteController::class, 'viewModProfUtente'])
        ->name('modifica_profilo_utente')->middleware('can:isStaffOrUser');

Route::post('/modifica_profilo_utente', [UtenteController::class, 'modificaProfiloUtente'])
        ->name('modifica_profilo_utente.store')->middleware('can:isStaffOrUser');

Route::get('/mostra_aziende_area_personale', [PublicController::class, 'allAziendeAdmin'])
        ->name('mostra_aziende_area_personale')->middleware('can:isStaffOrAdmin');/*con gli helper usiamo questa pagina sia per admin che staff*/

Route::get('/mostra_aziende_area_personale/mostra_promo_da_modificare/{aziendaId}', [PublicController::class, 'getOfferteAdmin'])
        ->name('mostra_promo_da_modificare')->middleware('can:isStaffOrAdmin');

Route::get('/modifica_azienda/{codiceA}', [PublicController::class, 'viewAzienda'])
        ->name('modifica_azienda')->middleware('can:isStaffOrAdmin');//Modificare il fatto che ti obbliga a cambiare l'immagine dell'azienda

Route::post('/modifica_azienda/{codiceA}', [PublicController::class, 'modificaAzienda'])
        ->name('modifica_azienda.store')->middleware('can:isStaffOrAdmin');

/*User*/

Route::get('/area_personale_utente', [UtenteController::class, 'getInfoUtente'])
        ->name('area_personale_utente')->middleware('can:isUser');

Route::get('/area_personale_utente/lista_coupon', [UtenteController::class, 'getCouponUtente'])
        ->name('lista_coupon')->middleware('can:isUser');

Route::get('/coupon/{codOfferta}', [PublicController::class, 'getBuono'])
        ->name('coupon')->middleware('can:isUser');

Route::get('/area_personale_utente/lista_coupon/coupon_riscattato/{buonoId}', [PublicController::class, 'getBuonoRiscattato'])
        ->name('coupon_riscattato')->middleware('can:isUser');


/*Admin*/

Route::get('/area_personale_admin', [UtenteController::class, 'getInfoAdmin'])
        ->name('area_personale_admin')->middleware('can:isAdmin');

Route::get('/mostra_aziende_area_personale/crea_azienda', [PublicController::class, 'addAzienda'])
        ->name('crea_azienda')->middleware('can:isAdmin');

Route::post('/mostra_aziende_area_personale/crea_azienda', [PublicController::class, 'storeAzienda'])
        ->name('crea_azienda.store')->middleware('can:isAdmin');

Route::get('/modifica_membro_staff/{staffId}', [UtenteController::class, 'viewMembroStaff'])
        ->name('modifica_membro_staff')->middleware('can:isStaffOrAdmin');

Route::post('/modifica_membro_staff/{staffId}', [UtenteController::class, 'modificaMembroStaff'])
        ->name('modifica_membro_staff.store')->middleware('can:isStaffOrAdmin');

Route::post('/mostra_aziende_area_personale/elimina_azienda/{aziendaId}', [PublicController::class, 'eliminaAzienda'])
        ->name('elimina_azienda.store')->middleware('can:isAdmin');

Route::post('/FAQ/elimina_faq/{faqId}', [DomandeController::class, 'eliminaFaq'])
        ->name('elimina_faq.store')->middleware('can:isAdmin');

Route::post('/area_personale_admin/mostra_membri_staff/elimina_membri_staff/{staffId}', [UtenteController::class, 'eliminaStaff'])
        ->name('elimina_membri_staff.store')->middleware('can:isAdmin');

Route::get('/FAQ/crea_faq', [DomandeController::class, 'addFaq'])
        ->name('crea_faq')->middleware('can:isAdmin');

Route::post('/FAQ/crea_faq', [DomandeController::class, 'storeFaq'])
        ->name('crea_faq.store')->middleware('can:isAdmin');

Route::post('/elimina_utenti_registrati/{userId}', [UtenteController::class, 'eliminaUserRegistered'])
        ->name('elimina_utenti_registrati.store');

Route::get('/FAQ/modifica_faq/{id}', [DomandeController::class, 'viewFaq'])
        ->name('modifica_faq')->middleware('can:isAdmin');

Route::post('/FAQ/modifica_faq/{id}', [DomandeController::class, 'modificaFaq'])
        ->name('modifica_faq.store');

Route::get('/crea_membro_staff', [UtenteController::class, 'addMembroStaff'])
        ->name('crea_membro_staff')->middleware('can:isAdmin');

Route::post('/crea_membro_staff', [UtenteController::class, 'storeMembroStaff'])
        ->name('crea_membro_staff.store')->middleware('can:isAdmin');

Route::get('/area_personale_admin/mostra_membri_staff', [UtenteController::class, 'allStaffAdmin'])
        ->name('mostra_membri_staff')->middleware('can:isAdmin');

Route::get('/area_personale_admin/mostra_utenti_registrati', [UtenteController::class, 'allRegisteredUsers'])
        ->name('mostra_utenti_registrati')->middleware('can:isAdmin');

      
/*Staff*/

Route::get('/area_personale_staff/crea_offerta', [PublicController::class, 'addOfferta'])
        ->name('crea_offerta')->middleware('can:isStaff');

Route::post('/area_personale_staff/crea_offerta', [PublicController::class, 'storeOfferta'])
        ->name('crea_offerta.store')->middleware('can:isStaff');

Route::get('/modifica_offerta/{offertaId}', [PublicController::class, 'viewOfferta'])
        ->name('modifica_offerta')->middleware('can:isStaff');

Route::post('/modifica_offerta/{offertaId}', [PublicController::class, 'modificaOfferta'])
        ->name('modifica_offerta.store')->middleware('can:isStaff');

Route::post('/elimina_offerta/{offertaId}', [PublicController::class, 'eliminaOfferta'])
        ->name('elimina_offerta.store')->middleware('can:isStaff');

Route::view('/area_personale_staff', 'area_personale_staff')
        ->name('area_personale_staff')->middleware('can:isStaff');

        
