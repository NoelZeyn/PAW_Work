<?php

namespace Database\Factories;
// database/factories/OrderFactory.php
// database/factories/OrderDetailsFactory.php

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\OrderDetails;

class OrderDetailsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => null, // Adjust as needed
            'product_id' => null, // Adjust as needed
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
