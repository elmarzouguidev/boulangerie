<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->unique();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('seotitle')->nullable();
            $table->string('seodescription')->nullable();
            $table->double('address_latitude')->unique();
            $table->double('address_longitude')->unique();
            $table->foreignId('pay_id');
            $table->foreign('pay_id')->references('id')->on('pays');
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
        Schema::dropIfExists('villes');
    }
}
