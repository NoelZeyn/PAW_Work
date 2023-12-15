<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->unsignedInteger('id')->nullable();
            $table->string('name', 50);
            $table->timestamps();
        });

        // Menambahkan trigger setelah create table
        DB::unprepared('
            CREATE TRIGGER categories_before_insert
            BEFORE INSERT ON categories FOR EACH ROW
            SET NEW.id = IFNULL(NEW.id, NEW.category_id);
        ');
    }

    public function down()
    {
        Schema::dropIfExists('categories');

        // Menghapus trigger sebelum drop table
        DB::unprepared('DROP TRIGGER IF EXISTS categories_before_insert');
    }
}
