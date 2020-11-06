<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAsetStorSuppliersSetColNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aset_stor_suppliers', function (Blueprint $table) {
            $table->text('address')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('phone')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aset_stor_suppliers', function (Blueprint $table) {
            $table->text('address')->unsigned()->change();
            $table->string('email')->unsigned()->change();
            $table->string('phone')->unsigned()->change();
        });
    }
}
