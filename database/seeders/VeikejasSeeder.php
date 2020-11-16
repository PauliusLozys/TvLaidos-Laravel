<?php

namespace Database\Seeders;

use App\Models\Veikejas;
use Illuminate\Database\Seeder;

class VeikejasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Veikejas::create([
            'vardas' => 'Marry',
            'fk_aktorius' => 2,
            'fk_tv_laida' => 1
        ]);

        Veikejas::create([
            'vardas' => 'Roger',
            'fk_aktorius' => 1,
            'fk_tv_laida' => 1
        ]);

        Veikejas::create([
            'vardas' => 'Marry',
            'fk_aktorius' => 2,
            'fk_tv_laida' => 2
        ]);
        
        Veikejas::create([
            'vardas' => 'Mom',
            'fk_aktorius' => 3,
            'fk_tv_laida' => 1
        ]);

        Veikejas::create([
            'vardas' => 'Marry',
            'fk_aktorius' => 1,
            'fk_tv_laida' => 3
        ]);

        Veikejas::create([
            'vardas' => 'Mother',
            'fk_aktorius' => 7,
            'fk_tv_laida' => 1
        ]);
    }
}
