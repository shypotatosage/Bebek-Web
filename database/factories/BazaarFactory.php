<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bazaar>
 */
class BazaarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'description'=>"asdfasdfasdf",
            'location'=>"Indonesia",
            'price_estimation'=>"500rb - 700rb",
            'starts_from'=>$this->faker->date(),
            'ends_at'=>$this->faker->date(),
            'syarat_ketentuan'=>"images/ketentuan_$name",
            'slot'=>7,
            'logo'=>"logo/ketentuan_$name",
        ];
    }
}
