<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    private static int $counter = 1;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Smartphone', 'Laptop', 'Wireless Headphones', 'Running Shoes', 
                'Coffee Maker', 'Backpack', 'Wristwatch', 'LED TV', 
                'Gaming Console', 'Office Chair'
            ]) . ' ' . self::$counter++, 
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory()->create()->id,  
        ];
    }
}
