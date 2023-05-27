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
            ['domanda' => "Come si può riscattare un coupon?", 'risposta' => "Per riscattare un'offerta devi essere registrato al sito e poi premere il tasto 'riscatta' che trovi nella pagina con le informazioni sulla promozione",
                'dataPub' => "2023-04-24 17:15", 'utente' => '2'],
            ['domanda' => "Come posso cercare una promozione?", 'risposta' => "Puoi cercare una promozione utilizzando la barra di ricerca che trovi nella parte alta del sito", 
                'dataPub' => "2023-05-20 15:00", 'utente' => '1'],
            ['domanda' => "Come posso cambiare i dati del mio profilo?", 'risposta' => "I dati del profilo possono essere aggiornati nell area personale",
                'dataPub' => "2023-05-15 13:15", 'utente' => '3'],
            ['domanda' => 'Posso visualizzare tutti i coupon che ho riscattato?', 'risposta' => "Certo! Tutti i coupon riscattati ed in corso di valisità possono essere consultati nell'area personale", 
                'dataPub' => "2023-05-10 20:10", 'utente' => '4'],
            ['domanda' => 'Dove posso trovare informazioni sulla vostra compagnia?', 'risposta' => "Nel sito è presente un'apposita sezione 'Chi siamo' in cui spieghiamo la nostra mission", 
                'dataPub' => "2023-05-04 08:30", 'utente' => '1'],
            ['domanda' => 'Come posso registrarmi?', 'risposta' => 'Per registrarsi bisogna premere sul pulsante registrati presente nella parte alta del sito e riempire tutti i campi richiesti', 
                'dataPub' => "2023-05-12 10:30", 'utente' => '5'],
            ['domanda' => 'Come posso trovarvi?', 'risposta' => 'Nella sezione in basso del nostro sito, cliccando sulla parola "Dove siamo" viene visualizzata una mappa che è possibile adoperare per raggiungerci nella nostra sede', 
                'dataPub' => "2023-05-27 10:30", 'utente' => '1'],
            ['domanda' => 'Come contattarci?', 'risposta' => 'Nella sezione in basso del nostro sito, cliccando sulla parola "Contattaci" si viene reindirizzati al client di posta elettronica con il quale è possibile inviarci una e-mail', 
                'dataPub' => "2023-05-27 11:30", 'utente' => '2'],
            ['domanda' => 'Come posso capire se una promozione è ancora valida?', 'risposta' => 'Le promozioni scadute sono contrassegnate sul nostro sito da una banner rosso in alto a sinistra dell immagine, con la parola "Scaduta" ad indicare che non è più possibile riscattarla ', 
                'dataPub' => "2023-05-27 12:30", 'utente' => '3'],
            
        ]);
    }
}
