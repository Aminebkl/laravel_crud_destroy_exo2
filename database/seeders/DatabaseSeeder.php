<?php

namespace Database\Seeders;

use App\Models\Batiment;
use App\Models\Formation;
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
        Batiment::factory(25)->create();
        Formation::factory(25)->create();
    }
}
