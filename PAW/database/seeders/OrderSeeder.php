<?php

namespace Database\Seeders;
// database/seeders/OrderSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::factory()->count(10)->create();
    }
}
