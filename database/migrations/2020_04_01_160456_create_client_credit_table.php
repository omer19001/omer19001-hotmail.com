<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_credit', function (Blueprint $table) {
            $table->integer('client_id')->unsigned()->index();
			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
			$table->integer('credit_id')->unsigned()->index();
			$table->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_credit');
    }
}
