<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->engine = "MyISAM";
            $table->increments('id');
            $table->bigInteger('user')->unsigned()->index();
            $table->string('address');
            $table->string('number');
            $table->string('complement');
            $table->string('zipcode');
            $table->string('city');
            $table->string('state');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
