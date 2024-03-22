<?php

namespace Database\Factories;

use App\Models\Lab;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnalyseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //This is for catrgory
            "lab_id" => Lab::factory(),
            "name" => $this->faker->unique()->word(), #this is  not work
            "parms" => $this->faker->numberBetween(12, 30),
            "value" => $this->faker->numberBetween(1, 30),

        ];
    }
}
