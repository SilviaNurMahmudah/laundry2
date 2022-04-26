<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komplains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode', 50);
            $table->biginteger('id_pelanggan')->unsigned();
            $table->bigInteger('id_order')->unsigned();
            $table->string('pesan');
            $table->string('img')->nullable();
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id')->on('pelanggans')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_order')->references('id')->on('orders')
                ->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komplains');
    }
}
