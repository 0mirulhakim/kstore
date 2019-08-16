<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStorTransTableAddPriceperunitCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stor_trans', function (Blueprint $table) {
            $table->decimal('priceperunit',9,2)->after('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('stor_trans', function (Blueprint $table) {
            $table->dropColumn('priceperunit');
        });
    }
}
