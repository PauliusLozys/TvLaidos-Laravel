<?php

namespace Database\Seeders;

use App\Models\Sezonas;
use Illuminate\Database\Seeder;

class SezonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sezonas::create([
            'sezono_nr' => 1,
            'sezono_ivertinimas' => 5,
            'epizodu_sk' => 15,
            'fk_tv_laida' => 1
        ]);

        Sezonas::create([
            'sezono_nr' => 2,
            'sezono_ivertinimas' => 7,
            'epizodu_sk' => 15,
            'fk_tv_laida' => 1
        ]);

        Sezonas::create([
            'sezono_nr' => 1,
            'sezono_ivertinimas' => 8,
            'epizodu_sk' => 15,
            'fk_tv_laida' => 2
        ]);

        Sezonas::create([
            'sezono_nr' => 1,
            'sezono_ivertinimas' => 6,
            'epizodu_sk' => 20,
            'fk_tv_laida' => 3
        ]);

        Sezonas::create([
            'sezono_nr' => 2,
            'sezono_ivertinimas' => 8,
            'epizodu_sk' => 15,
            'fk_tv_laida' => 3
        ]);
    }
}
