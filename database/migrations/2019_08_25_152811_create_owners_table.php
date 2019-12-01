<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',64);
            $table->string('email',64);
            $table->string('phone_number',12);
            $table->string('fb',12)->nullable();
            $table->string('Insta',12)->nullable();
            $table->string('linkedIn',12)->nullable();
            $table->string('twitter',12)->nullable();
            $table->string('password')->nullable();
            $table->string('password_confirm')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('owners');
    }
}
