<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'description'=>$this->faker->realText(30),
            'price'=>$this->faker->numberBetween(100,200000),
            'category_id'=>Category::inRandomOrder()->first()->id,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
