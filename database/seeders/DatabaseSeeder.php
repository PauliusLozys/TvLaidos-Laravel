<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TvLaidaSeeder::class);
        $this->call(AktoriusSeeder::class);
        $this->call(VeikejasSeeder::class);
        $this->call(SezonasSeeder::class);
        $this->call(KurejasSeeder::class);
        $this->call(VeikejasSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
