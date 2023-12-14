<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('stock_quantity');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('product_id')->references('product_id')->on('products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
