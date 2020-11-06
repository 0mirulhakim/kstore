<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorStocktakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stor_stocktake', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stor_toner_application_id');
            $table->string('bpsi_no');
            $table->date('process_date');
            $table->date('approve_date')->nullable();
            $table->integer('quantity');
            $table->string('stor_receipt_item_btb_no');
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
        Schema::dropIfExists('stor_stocktake');
    }
}
