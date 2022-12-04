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
        Schema::create('tbl_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string("nama_karyawan");
            $table->text("alamat");
            $table->integer("no_telepon");
            $table->string("tampat_lahir");
            $table->date("tanggal_lahir");
            $table->string("jenis_kelamin");
            $table->string("status");
            $table->integer("jumlah_anak");
            $table->string("username");
            $table->string("password");
            $table->integer("id_jabatan");
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
        Schema::dropIfExists('tbl_karyawan');
    }
};
