<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //This is seed 
            "name"=>$this->faker->name,
            "phone"=>$this->faker->phoneNumber(),
            "photo"=>$this->faker->name().".png",
            "address"=>$this->faker->address(),
        ];
    }
}
