<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('views');
            $table->integer('a');
            $table->integer('b');
            $table->integer('c');
            $table->integer('d');
            $table->integer('e');
            $table->integer('f');
            $table->integer('g');
            $table->integer('h');
            $table->integer('i');
            $table->integer('j');
            $table->integer('k');
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
        Schema::dropIfExists('counters');
    }
}
