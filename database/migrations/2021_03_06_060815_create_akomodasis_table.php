<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkomodasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akomodasis', function (Blueprint $table) {
            $table->bigIncrements('id_akomodasi');
            $table->string('nama_akomodasi');
            $table->string('alamat');
            $table->string('fasilitas');
            $table->string('deskripsi');
            $table->string('gambar');
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akomodasis');
    }
}
