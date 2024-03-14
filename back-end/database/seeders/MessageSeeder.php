<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $messages=[
            ['testo'=>'mi piacerebbe lavorare con voi'],
            ['testo' => 'Ciao! Sono interessato al vostro servizio.'],
            ['testo' => 'Salve, avete dei posti disponibili per uno stage?'],
            ['testo' => 'Buongiorno! Sto cercando collaborazioni nel campo della programmazione.'],
            ['testo' => 'Mi piacerebbe saperne di più sulla vostra azienda.'],
            ['testo' => 'Saluti! Sto cercando un team per lavorare su un progetto di sviluppo web.'],
            ['testo' => 'Ciao, avete delle opportunità di lavoro aperte?'],
            ['testo' => 'Buongiorno! Vorrei avere informazioni sui vostri servizi di consulenza.'],
            ['testo' => 'Sono uno sviluppatore frontend in cerca di nuove sfide professionali.'],
            ['testo' => 'Salve! Sto cercando un partner per avviare una startup.'],
            ['testo' => 'Buongiorno! Mi piacerebbe partecipare ai vostri eventi di networking.'],
            ['testo' => 'Ciao, avete dei corsi di formazione disponibili?'],
            ['testo' => 'Saluti! Sto valutando opportunità di investimento nel settore tecnologico.'],
            ['testo' => 'Buongiorno! Vorrei organizzare una presentazione del mio prodotto presso la vostra azienda.'],
            ['testo' => 'Sono uno studente universitario interessato a uno stage formativo.'],
            ['testo' => 'Ciao! Vorrei sapere di più sui vostri progetti di responsabilità sociale.'],
            ['testo' => 'Salve, avete dei partner commerciali con cui collaborate?'],
            ['testo' => 'Buongiorno! Mi piacerebbe partecipare a un hackathon organizzato dalla vostra azienda.'],
            ['testo' => 'Sto cercando informazioni sui vostri prodotti e servizi digitali.'],
            ['testo' => 'Ciao, sono un appassionato di tecnologia e vorrei fare parte della vostra community.'],
            ['testo' => 'Salve! Sono interessato a una consulenza per migliorare la mia presenza online.'],
        ];



        foreach ($messages as $message){
            $newmessage=new Message;
            $newmessage->fill($message);
            $newmessage->save();
        }
        
    }
}
