<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nota', 20);            
            $table->bigInteger('id_jenis')->unsigned();
            $table->bigInteger('id_pelanggan')->unsigned();
            $table->integer('berat');
            $table->integer('total');
            $table->string('catatan')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->date('tgl_deadline')->nullable();
            $table->time('wkt_deadline')->nullable();

            $table->foreign('id_jenis')->references('id')->on('jenis')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans')
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
        Schema::dropIfExists('orders');
    }
}
