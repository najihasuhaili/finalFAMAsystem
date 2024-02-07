<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorangPermohonansTable extends Migration
{
    public function up()
    {
        Schema::create('borang_permohonans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemohon');
            $table->string('email');
            $table->string('no_sambungan');
            $table->string('jawatan');
            $table->string('unit_bahagian');
            $table->string('nama_mesyuarat');
            $table->string('pengerusi');
            $table->datetime('dari');
            $table->datetime('hingga');
            $table->integer('bil_ahli')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
