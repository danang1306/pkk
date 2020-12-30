<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->string('no_transaksi');
            $table->foreignId('customer_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('bus_id')
            ->constrained()
            ->onDelete('cascade');
            $table->date('tanggal_sewa');
            $table->date('tanggal_selesai');
            $table->integer('total');
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
        Schema::dropIfExists('history');
    }
}
