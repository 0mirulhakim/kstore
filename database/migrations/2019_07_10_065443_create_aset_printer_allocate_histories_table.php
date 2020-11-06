<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsetPrinterAllocateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_printer_allocate_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('aset_printer_id');
            $table->date('allocate_date_end');
            $table->unsignedInteger('hr_staff_id');
            $table->string('location');
            $table->integer('user_id');
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
        Schema::dropIfExists('aset_printer_allocate_histories');
    }
}
