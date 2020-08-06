<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrachOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brach_offices', function (Blueprint $table) {
            $table->id();
            $table->integer('precinct')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('ip');
            $table->integer('active')->default('1');
            $table->integer('cellPhone')->nullable();
            $table->integer('telephone')->nullable();
            $table->text('address');
            $table->string('location');
            $table->integer('postalCode')->nullable();
            $table->string('state');
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
        Schema::dropIfExists('brach_offices');
    }
}
