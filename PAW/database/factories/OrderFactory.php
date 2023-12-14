<?php

namespace Database\Factories;
// database/factories/OrderFactory.php

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Order;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => null, // Adjust as needed
            'status' => $this->faker->randomElement(['pending', 'completed']),
        ];
    }
}
