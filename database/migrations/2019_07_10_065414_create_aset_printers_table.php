<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsetPrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_printers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('aset_brand_id');
            $table->unsignedInteger('aset_model_id');
            $table->string('serial_no');
            $table->string('registration_no');
            $table->date('receive_date');
            $table->unsignedInteger('aset_stor_supplier_id');
            $table->unsignedInteger('aset_procurement_ty_id');
            $table->unsignedInteger('aset_status_id');
            $table->unsignedInteger('hr_staff_id');
            $table->string('location');
            $table->date('allocate_date');
            $table->longText('remarks');
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
        Schema::dropIfExists('aset_printers');
    }
}
