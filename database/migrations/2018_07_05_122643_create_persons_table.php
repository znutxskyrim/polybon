<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('villagenumber');
            $table->string('alley');
            $table->string('road');
            $table->string('subdistrict');
            $table->string('district');
            $table->string('province');
            $table->string('postcode');
            $table->string('phonenumber');
            $table->string('phonenumber_con');
            $table->string('fax');
            $table->string('email');
            $table->string('department');
            $table->string('ext');
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
        Schema::dropIfExists('persons');
    }
}
