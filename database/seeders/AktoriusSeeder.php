<?php

namespace Database\Seeders;

use App\Models\Aktorius;
use Illuminate\Database\Seeder;

class AktoriusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aktorius::create([
            'vardas' => 'Mike',
            'pavarde' => 'Wozauski',
            'lytis' => 0
        ]);

        
        Aktorius::create([
            'vardas' => 'Wilbert',
            'pavarde' => 'Hos',
            'lytis' => 0
        ]);

        
        Aktorius::create([
            'vardas' => 'Alabama',
            'pavarde' => 'Split',
            'lytis' => 1
        ]);

        
        Aktorius::create([
            'vardas' => 'Melnia',
            'pavarde' => 'Klitz',
            'lytis' => 1
        ]);

        
        Aktorius::create([
            'vardas' => 'Bob',
            'pavarde' => 'Bobber',
            'lytis' => 0
        ]);

        
        Aktorius::create([
            'vardas' => 'Mike',
            'pavarde' => 'Kawan',
            'lytis' => 0
        ]);

        
        Aktorius::create([
            'vardas' => 'Marry',
            'pavarde' => 'Moss',
            'lytis' => 1
        ]);
    }
}
