<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cumtomer_name');
            $table->integer('item_id');
            $table->integer('price');
            $table->timestamp('added_at', $precision = 0);
            $table->date('Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pms');
    }
}
