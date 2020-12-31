<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apisx', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Varchar
            $table->string('ecogeography');
            $table->string('ecosystem');
            $table->string('latitude');
            $table->string('weather');
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
        Schema::dropIfExists('apisx');
    }
}
