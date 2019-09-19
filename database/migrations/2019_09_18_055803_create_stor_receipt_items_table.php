<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorReceiptItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stor_receipt_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stor_receipt_id');
            $table->string('btb_no');
            $table->unsignedInteger('stor_toner_id');
            $table->date('receive_date');
            $table->string('measure_unit')->nullable();
            $table->integer('receive_qty');
            $table->decimal('price_per_unit',9,2);
            $table->decimal('price_total',9,2);
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
        Schema::dropIfExists('stor_receipt_items');
    }
}
