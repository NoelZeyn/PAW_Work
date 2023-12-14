<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamp('order_date')->useCurrent();
            $table->string('status', 20)->default('pending');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
