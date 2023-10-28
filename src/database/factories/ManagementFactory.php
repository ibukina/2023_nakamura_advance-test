<?php

namespace Database\Factories;

use App\Models\Management;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'management_id'->$this->faker->randomNumber(1),
        ];
    }
}
