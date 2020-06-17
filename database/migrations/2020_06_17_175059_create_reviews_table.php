<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email',60)->unique();
            $table->text('content');
            $table->integer('vote');
            $table->string('avatar')->default('avatar.png');
            $table->boolean('active')->default(true);

            $table->foreignId('bakerie_id');
            $table->foreign('bakerie_id')->references('id')->on('bakeries');
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
        Schema::dropIfExists('reviews');
    }
}
