<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBakeriesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * Powered by Elmarzougui Abdelghafour 
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakeries', function (Blueprint $table) {

            $table->id();
            $table->string('name',100);
            $table->string('slug')->unique();
            $table->string('address')->nullable();
            $table->string('logo')->nullable()->default('bakery.png');
            $table->longText('description')->nullable();
            $table->string('image')->nullable()->default('bakery.jpg');
            $table->string('weblink')->nullable()->unique();
            $table->string('responsable',50)->nullable();
            $table->string('email',50)->unique();
            $table->string('service_tele',20)->unique();
            $table->string('service_email',50)->unique();

            $table->boolean('active')->default(true);

            $table->boolean('in_home')->default(false);
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();

            $table->foreignId('zone_id');
            $table->foreignId('ville_id');

            $table->double('address_latitude')->unique();
            $table->double('address_longitude')->unique();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('ville_id')->references('id')->on('villes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bakeries');
    }
}
