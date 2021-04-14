<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('file_type')->nullable();
            $table->string('invested_in_markerts')->nullable();
            $table->string('interested_in_earning_fixed_income')->nullable();
            $table->string('investment_instruments')->nullable();
            $table->longText('asset_classes')->nullable();
            $table->string('geographies_interested')->nullable();
            $table->string('accredited_investor')->nullable();
            $table->string('qualified_investor')->nullable();
            $table->string('amounts_placed')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('investoremail')->nullable();
            $table->string('investorpassword')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('authorization')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('documenttype')->nullable();

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
        Schema::dropIfExists('applicants');
    }
}
