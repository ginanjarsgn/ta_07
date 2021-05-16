<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinderamatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinderamatas', function (Blueprint $table) {
            $table->bigIncrements('id_cinderamata');
            $table->string('nama_toko');
            $table->string('alamat');
            $table->string('jenis_cinderamata');
            $table->string('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinderamatas');
    }
}
