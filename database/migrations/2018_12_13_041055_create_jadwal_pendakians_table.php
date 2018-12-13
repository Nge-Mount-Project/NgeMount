<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalPendakiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pendakians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kuota');
            $table->string('nama_tim');
            $table->date('tanggal');
            $table->integer('gunung_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('jadwal_pendakians', function (Blueprint $table){
           $table->foreign('gunung_id')
                 ->references('id')
                 ->on('gunungs')
                 ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_pendakians');
    }
}
