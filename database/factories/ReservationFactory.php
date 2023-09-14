<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'gmail'=>fake()->email(),
            'tel_number'=>fake()->phoneNumber(),
            'guest_number'=>random_int(1,10),
            'res_date'=> fake()->DateTime(),
            'table_id'=>random_int(1,5),
            // 'location'=>fake()->randomElement(['Font','Outside','Inside'])
        ];
    }
}
