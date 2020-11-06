<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorTonerApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stor_toner_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('hr_staff_id');
            $table->unsignedInteger('stor_toner_id');
            $table->integer('quantity');
            $table->unsignedInteger('stor_sts_application_id');
            $table->date('action_date');
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
        Schema::dropIfExists('stor_toner_applications');
    }
}
