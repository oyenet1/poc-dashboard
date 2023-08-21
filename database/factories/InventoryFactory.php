<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    public $categories = ["drugs and medicine", "bed", "food"];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'image' => fake()->imageUrl(200, 200),
            'price' => random_int(10, 5000),
            'quantity' => random_int(10, 300),
            'category' => $this->categories[array_rand($this->categories)],
            'code' => fake()->ean8()
        ];
    }
}