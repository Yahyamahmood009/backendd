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
        Schema::create('d_prescriptions', function (Blueprint $table) {
            $table->id();

            $table->string('Patient_name');
            $table->date('Prescription_Date');
            $table->string('Patient_ID');
            $table->string('Diagnose');
            $table->string('Medicine_Name');
            $table->string('Timing');
           
           
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
        Schema::dropIfExists('d_prescriptions');
    }
};
