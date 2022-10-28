<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_barang', function (Blueprint $table) {
            $table->increments('id_review');
            $table->integer('id_barang');
            $table->timestamp('waktu_review')->useCurrent;
            $table->text('review');
            $table->integer('barang_terjual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_barang');
    }
};
