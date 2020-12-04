<?php

namespace Database\Seeders;

use App\Models\Kuria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KuriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kuria::create([
            'fk_tv_laida' => 4,
            'fk_kurejas' => 1
        ]);

        Kuria::create([
            'fk_tv_laida' => 3,
            'fk_kurejas' => 2
        ]);

        Kuria::create([
            'fk_tv_laida' => 2,
            'fk_kurejas' => 3
        ]);

        Kuria::create([
            'fk_tv_laida' => 2,
            'fk_kurejas' => 4
        ]);

        Kuria::create([
            'fk_tv_laida' => 1,
            'fk_kurejas' => 5
        ]);

        Kuria::create([
            'fk_tv_laida' => 1,
            'fk_kurejas' => 6
        ]);

    }
}
