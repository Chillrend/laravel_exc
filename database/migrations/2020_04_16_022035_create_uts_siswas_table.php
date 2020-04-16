<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtsSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uts_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('prodi');
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('angkatan');

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
        Schema::dropIfExists('uts_siswas');
    }
}
