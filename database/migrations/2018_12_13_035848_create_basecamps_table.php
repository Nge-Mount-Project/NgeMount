<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasecampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basecamps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_basecamp');
            $table->string('lokasi');
            $table->double('harga_tiket');
            $table->integer('gunung_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('basecamps', function (Blueprint $table){
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
        Schema::dropIfExists('basecamps');
        $table->dropForeign('basecamps_gunung_id_foreign');
    }
}
