<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//country, city, zipcode
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // neistrinkit
            $table->string('name');
            $table->string('code');
            $table->string('address');
            $table->string('phone');
            $table->string('country');
            $table->string('city');
            $table->string('zipcode');
            $table->timestamps(); //neistrinkit
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
