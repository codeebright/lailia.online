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
            $table->bigIncrements('id');
            $table->string('province');
            $table->string('state');
            $table->string('rood');
            $table->string('alley');
            $table->string('station');
            $table->string('home_number');
            $table->integer('hostel_id')->unsigned();
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
        Schema::dropIfExists('addresses');
        $table->foreign('hostel_id')
    ->references('id')->on('hostels')
    ->onDelete('cascade');
    }
}
