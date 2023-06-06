<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domande')->insert([
            ['domanda' => "Come posso accedere alle offerte e ai coupon sul vostro sito web?", 'risposta' => "Per accedere alle offerte e ai coupon sul nostro sito web, è necessario registrarsi e effettuare il login. Una volta autenticati, potrai visualizzare tutte le offerte disponibili.",
                'dataPub' => "2023-04-24 17:15", 'utente' => '2'],
            ['domanda' => "È necessario registrarsi per ottenere i coupon?", 'risposta' => "Sì, è necessario registrarsi sul nostro sito web per ottenere i coupon. La registrazione è gratuita e richiede solo pochi semplici passaggi.", 
                'dataPub' => "2023-05-20 15:00", 'utente' => '1'],
            ['domanda' => "Quante aziende partecipano al vostro programma di coupon?", 'risposta' => "Il nostro sito web collabora con una vasta gamma di aziende partecipanti, offrendo coupon per una varietà di prodotti. Puoi consultare l'elenco completo delle aziende nella nostra sezione Home dedicata.",
                'dataPub' => "2023-05-15 13:15", 'utente' => '3'],
            ['domanda' => 'Posso riscattare più di un coupon per lo stesso prodotto?', 'risposta' => "No, puoi riscattare un solo coupon per ciascuna offerta. Questo aiuta a garantire che il maggior numero possibile di utenti possa beneficiare delle offerte disponibili.", 
                'dataPub' => "2023-05-10 20:10", 'utente' => '4'],
            ['domanda' => 'Come posso utilizzare i coupon ottenuti? Devo stamparli o posso usarli online?', 'risposta' => "I coupon possono essere utilizzati in due modi. Puoi stampare la pagina generata dopo aver premuto il pulsante 'riscatta' e presentarla direttamente in negozio. In alternativa, alcune offerte potrebbero fornire istruzioni per riscattare il coupon online, inserendo un codice specifico durante il processo di acquisto.", 
                'dataPub' => "2023-05-04 08:30", 'utente' => '1'],
            ['domanda' => 'Come faccio a modificare le mie informazioni personali sul vostro sito?', 'risposta' => "Per modificare le tue informazioni personali, accedi alla tua area personale sul nostro sito. Lì troverai un'opzione per aggiornare i tuoi dati.", 
                'dataPub' => "2023-05-27 10:30", 'utente' => '1'],
            ['domanda' => 'Posso visualizzare un elenco dei coupon che ho precedentemente riscattato?', 'risposta' => "All'interno dell'area personale, avrai accesso a un elenco completo dei coupon precedentemente riscattati. Puoi visualizzare e gestire i tuoi coupon in questa sezione.", 
                'dataPub' => "2023-03-17 11:30", 'utente' => '2'],
            ['domanda' => 'Cosa succede se un coupon non funziona?', 'risposta' => "Se un coupon non funziona, ti consigliamo di contattarci direttamente. Faremo del nostro meglio per risolvere il problema e assisterti nell'utilizzo dei coupon. ", 
                'dataPub' => "2023-08-12 12:30", 'utente' => '3'],
            ['domanda' => 'Come posso contattarvi se ho domande o problemi con i coupon?', 'risposta' => "Se hai domande o incontri problemi con i coupon, ti invitiamo a contattarci tramite la sezione contattaci che puoi trovare nel footer del sito. Il nostro team sarà lieto di aiutarti e fornirti ulteriori informazioni.", 
                'dataPub' => "2023-09-27 09:30", 'utente' => '4'],
            ['domanda' => 'Qual è la durata di validità dei coupon ottenuti sul vostro sito?', 'risposta' => "La durata di validità dei coupon può variare a seconda delle offerte e delle aziende partecipanti. Ti consigliamo di controllare la data di scadenza riportata nella pagina dei dettagli dell'offerta per assicurarti di utilizzare il coupon prima che scada.", 
                'dataPub' => "2023-11-11 11:30", 'utente' => '2'],
            ['domanda' => 'Posso condividere i coupon ottenuti con altre persone?', 'risposta' => "I coupon ottenuti sul nostro sito sono destinati all'uso personale e non possono essere condivisi con altre persone, a meno che non sia specificamente indicato nelle istruzioni dell'offerta. Ogni utente registrato può riscattare un solo coupon per ciascuna offerta. ", 
                'dataPub' => "2023-07-07 12:30", 'utente' => '5'],
            
        ]);
    }
}
