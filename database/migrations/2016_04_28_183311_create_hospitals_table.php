<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('hospitalcategory_id');
            $table->integer('districts_id');
            $table->string('address');
            $table->string('ownership');
            $table->integer('activities');
            $table->integer('beds');
            $table->integer('doctors');
            $table->integer('phone')->unique();
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
        Schema::drop('hospitals');
    }
}
