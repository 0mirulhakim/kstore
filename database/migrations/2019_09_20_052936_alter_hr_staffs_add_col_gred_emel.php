<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterHrStaffsAddColGredEmel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hr_staffs', function (Blueprint $table) {
            $table->string('email')->after('hr_unit_id')->nullable();
            $table->string('gred')->after('hr_position_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('hr_staffs', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('gred');
        });
    }
}
