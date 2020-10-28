<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpages', function (Blueprint $table) {
            $table->id();
            $table->longText('tagline')->nullable();
            $table->longText('tagdescription')->nullable();
            $table->longText('calltoactionone')->nullable();
            $table->longText('calltoactiononedescription')->nullable();
            $table->longText('calltoactiontwo')->nullable();
            $table->longText('calltoactiontwodescription')->nullable();
            $table->longText('calltoactionthree')->nullable();
            $table->longText('calltoactionthreedescription')->nullable();
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
        Schema::dropIfExists('landingpages');
    }
}
