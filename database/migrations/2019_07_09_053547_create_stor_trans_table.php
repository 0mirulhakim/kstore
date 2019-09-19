<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stor_trans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('stor_toner_id');
            $table->unsignedInteger('stor_batch_code_id');
            $table->string('batch_no');
            $table->unsignedInteger('aset_stor_supplier_id');
            $table->unsignedInteger('hr_staff_id');
            $table->integer('quantity');
            $table->decimal('price',9,2);
            $table->unsignedInteger('user_id');
            $table->longText('remarks');
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
        Schema::dropIfExists('stor_trans');
    }
}
