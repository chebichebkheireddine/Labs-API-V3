<?php

namespace Database\Seeders;

use App\Models\Analyse;
use App\Models\Lab;
use App\Models\User;
use Illuminate\Database\Seeder;
use LDAP\Result;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // seed new data
        // Lab::factory(4)->create();
        Analyse::factory(50)->create();
    }
}
