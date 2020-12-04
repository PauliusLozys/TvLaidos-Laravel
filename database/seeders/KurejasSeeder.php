<?php

namespace Database\Seeders;

use App\Models\Kurejas;
use Illuminate\Database\Seeder;

class KurejasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kurejas::create([
            'vardas' => 'Mozni',
            'pavarde' => 'Closs',
            'role' => 'Writter',
            'lytis' => 0
        ]);

        Kurejas::create([
            'vardas' => 'Kuff',
            'pavarde' => 'Bertron',
            'role' => 'Sound designer',
            'lytis' => 0
        ]);

        Kurejas::create([
            'vardas' => 'Klif',
            'pavarde' => 'Kokuznow',
            'role' => 'Writter',
            'lytis' => 0
        ]);

        Kurejas::create([
            'vardas' => 'Baz',
            'pavarde' => 'Foz',
            'role' => 'Dialog writer',
            'lytis' => 0
        ]);

        Kurejas::create([
            'vardas' => 'Marry',
            'pavarde' => 'Gold',
            'role' => 'Writter',
            'lytis' => 0
        ]);

        Kurejas::create([
            'vardas' => 'Fizz',
            'pavarde' => 'Buzz',
            'role' => 'Interview managment',
            'lytis' => 1
        ]);
    }
}
