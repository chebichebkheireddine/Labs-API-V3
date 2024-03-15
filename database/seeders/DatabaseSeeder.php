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
        $lab=Lab::create(
            [
                "name" => "khiro",
                "phone" => 213674646045,
                "photo" => "test.png",
                "address" => "Ain kermes"

            ]
        );	
        $lab2=Lab::create(
            [
                "name" => "Chikhawi ahmed",
                "phone" => 213674646045,
                "photo" => "test.png",
                "address" => "Ain kermes"

            ]
        );
        Analyse::create(
            [
                "name"=>"CBC",
                "parms"=>12,
                "value"=>123,
                "result"=>123,
                "lab_id"=>$lab->id
            ]
        );
        Analyse::create(
            [
                "name"=>"CBC",
                "parms"=>12,
                "value"=>123,
                "result"=>123,
                "lab_id"=>$lab->id
            ]
        );
    }
}
