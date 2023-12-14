<?php

namespace Database\Seeders;
// database/seeders/ProductSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory()->count(10)->create();
    }
}
