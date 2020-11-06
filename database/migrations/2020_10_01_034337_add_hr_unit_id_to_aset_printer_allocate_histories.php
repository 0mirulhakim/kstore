<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHrUnitIdToAsetPrinterAllocateHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aset_printer_allocate_histories', function (Blueprint $table) {
            $table->integer('hr_unit_id')->after('hr_staff_id')->nullable();
            $table->string('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aset_printer_allocate_histories', function (Blueprint $table) {
            $table->integer('hr_unit_id')->after('hr_staff_id')->nullable();
            $table->string('remarks')->nullable();
        });
    }
}
