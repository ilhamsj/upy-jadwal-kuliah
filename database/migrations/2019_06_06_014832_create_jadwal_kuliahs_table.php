<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_mata_kuliah'); #->index();
            $table->integer('id_dosen'); #->index();
            $table->integer('id_ruangan');#->index();
            $table->integer('id_kelas');#->index();
            $table->enum('hari', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
            $table->time('pukul');
            $table->enum('status', ['libur', 'masuk', 'tugas'])->default('masuk');
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
        Schema::dropIfExists('jadwal_kuliah');
    }
}
