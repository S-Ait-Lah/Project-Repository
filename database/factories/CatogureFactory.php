<?php

namespace Database\Factories;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catogure>
 */
class CatogureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name'=>$this->faker->name(),
            'description'=>$this->faker->text(),
            'image'=>fake()->image(),

        ];
    }
}
