<?php

namespace Database\Seeders;

use App\Models\TvLaida;
use Illuminate\Database\Seeder;

class TvLaidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TvLaida::create([
            'pavadinimas' => 'Good show',
            'aprasymas' => 'A good show about something interesting i guess',
            'trukme' => 32,
            'ziurovu_ivertinimas' => 7.12
        ]);

        TvLaida::create([
            'pavadinimas' => 'Not good show',
            'aprasymas' => 'A good show about something not very interesting i guess',
            'trukme' => 22,
            'ziurovu_ivertinimas' => 9.12
        ]);

        TvLaida::create([
            'pavadinimas' => 'Tv Pagalba',
            'aprasymas' => 'Kaimo policijos simuliacija',
            'trukme' => 32,
            'ziurovu_ivertinimas' => 10
        ]);

        TvLaida::create([
            'pavadinimas' => 'Kaukas',
            'aprasymas' => 'Is uzsienio pirktas, niekam neidomus sou',
            'trukme' => 32,
            'ziurovu_ivertinimas' => 4.2
        ]);
    }
}
