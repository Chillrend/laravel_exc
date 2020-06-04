<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas_hobbies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siswa_id')->unsigned()->index();
            $table->integer('hobby_id')->unsigned()->index();
            $table->timestamps();

            $table
                ->foreign('siswa_id')
                ->references('id')
                ->on('uts_siswas')
                ->onDelete('cascade')
                ->onUpdated('cascade');

            $table
                ->foreign('hobby_id')
                ->references('id')
                ->on('hobbies')
                ->onDelete('cascade')
                ->onUpdated('cascade');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas_hobbies');
    }
}
