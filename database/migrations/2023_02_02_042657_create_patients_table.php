<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('fIrst_name');
            $table->string('last_name');
            $table->string('Email');
            $table->string('Pass');
            $table->date('DOB');
            $table->string('Mobile_number');
            $table->string('Cnic');
            $table->string('Address');
            $table->string('Gender');
            

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
        Schema::dropIfExists('patients');
    }
};
