<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'status'=>fake()->randomElement(['Pablish','Darft']),
            'location'=>fake()->randomElement(['Outside','Inside','Font']),
            'guest_number'=>random_int(1,10),
        ];
    }
}
