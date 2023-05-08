<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_records', function (Blueprint $table) {
            $table->increments('HealthRecordID');
			$table->integer('Synced');
			$table->string('DiastolicBP');
			$table->string('SystolicBP');
			$table->string('LDL');
			$table->string('HDL');
			$table->string('Blood_PH');
			$table->string('Blood_sugar_level');
			$table->string('SMS_Status');
			$table->string('PatientID');
			$table->string('AgentID');
			$table->string('Location');
			$table->string('Patient_contact');
			$table->string('RecordID');
			$table->string('Heart_rate');
			$table->string('Body_temperature');
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
        Schema::drop('health_records');
    }
}
