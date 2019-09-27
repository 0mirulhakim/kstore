<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHrStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identification_card');
            $table->string('name');
            $table->unsignedInteger('hr_position_id');
            $table->unsignedInteger('hr_unit_id');
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('hr_staffs');
    }
}
