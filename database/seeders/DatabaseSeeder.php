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
         \App\Models\User::factory(1)->create();
        \App\Models\Usuario::factory(20)->create();
        \App\Models\Equipo::factory(20)->create();
        \App\Models\Historico::factory(20)->create();
    }
}
