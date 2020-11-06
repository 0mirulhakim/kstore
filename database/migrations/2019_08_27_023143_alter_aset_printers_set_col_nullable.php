<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAsetPrintersSetColNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aset_printers', function (Blueprint $table) {
            $table->string('registration_no')->nullable()->change();
            $table->date('receive_date')->nullable()->change();
            $table->unsignedInteger('aset_stor_supplier_id')->nullable()->change();
            $table->unsignedInteger('aset_procurement_ty_id')->nullable()->change();
            $table->unsignedInteger('aset_status_id')->nullable()->change();
            $table->unsignedInteger('hr_staff_id')->nullable()->change();
            $table->date('allocate_date')->nullable()->change();
            $table->longText('remarks')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
