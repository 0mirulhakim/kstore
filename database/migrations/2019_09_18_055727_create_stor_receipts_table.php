<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stor_receipts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('aset_stor_supplier_id');
            $table->unsignedInteger('aset_stor_receipt_type_id');
            $table->string('lo_ref_no')->nullable();
            $table->date('lo_date')->nullable();
            $table->string('do_ref_no')->nullable();
            $table->date('do_date')->nullable();
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
        Schema::dropIfExists('stor_receipts');
    }
}
