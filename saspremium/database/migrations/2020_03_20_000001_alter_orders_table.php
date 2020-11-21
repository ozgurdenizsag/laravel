<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // CONSTRAINTS
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');//->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');//->onUpdate('cascade');
            $table->foreign('id_delivery_address')->references('id')->on('delivery_addresses')->onDelete('cascade');//->onUpdate('cascade');
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
