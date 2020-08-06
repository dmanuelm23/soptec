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
        Schema::create('branch_offices', function (Blueprint $table) {
            $table->id();
            $table->integer('precinct')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('ip');
            $table->integer('active')->default('1');
            $table->string('cellPhone')->nullable();
            $table->string('telephone')->nullable();
            $table->text('address');
            $table->string('location');
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
        Schema::dropIfExists('branch_offices');
    }
}
