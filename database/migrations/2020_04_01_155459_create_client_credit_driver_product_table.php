<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientCreditDriverProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_credit_driver_product', function (Blueprint $table) {
             
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('product_id')->unsigned()->index();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('credit_id')->unsigned()->index()->nullable();
            $table->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
            $table->integer('driver_id')->unsigned()->index();
			$table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
		 $table->string('delivery_location');
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
        Schema::dropIfExists('client_credit_driver_product');
    }
}
