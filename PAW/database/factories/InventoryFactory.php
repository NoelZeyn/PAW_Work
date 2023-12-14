<?php

namespace Database\Factories;
// database/factories/InventoryFactory.php

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Inventory;

class InventoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => null, // Adjust as needed
            'stock_quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
