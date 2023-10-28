<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'management_id'=>$this->faker->numberBetween(1),
            'fullname'=>$this->faker->name,
            'gender'=>$this->faker->numberBetween(1,2),
            'email'=>$this->faker->safeEmail,
            'postcode'=>$this->faker->postcode,
            'address'=>$this->faker->address,
            'building_name'=>$this->faker->address,
            'opinion'=>$this->faker->text(120),
            'created_at'=>$this->faker->dateTimeBetween($startDate='-2 year',$endDate='now'),
        ];
    }
}
