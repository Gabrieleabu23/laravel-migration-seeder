<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = new Train();
        $pizza-> id= 1;
        $pizza -> azienda = 'italo';
        $pizza -> stazione_partenza = "Bologna";
        $pizza -> stazione_arrivo = "Milano";
        $pizza -> ora_partenza = 16;
        $pizza -> ora_arrivo = 18;
        $pizza -> codice_treno = 9952;
        $pizza -> carozze_treno = 4;
        $pizza -> in_orario = true;
        $pizza -> cancellato = false;

        $pizza -> save();


    
    }
}
