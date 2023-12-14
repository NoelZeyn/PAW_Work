<?php

namespace Database\Factories;
// database/factories/ReviewFactory.php

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Review;

class ReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => null, // Adjust as needed
            'product_id' => null, // Adjust as needed
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph,
        ];
    }
}
