<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Petition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        Petition::factory(50)->create();
        Author::factory(10)->create();
    }
}
