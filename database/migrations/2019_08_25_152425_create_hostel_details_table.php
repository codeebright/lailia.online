<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('hostel_id');
            $table->string('phone',12);
            $table->string('descrption');
            $table->string('email',12)->nullable();
            $table->string('website',12)->nullable();
            $table->string('fb')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('hostel_details');
    }
}
