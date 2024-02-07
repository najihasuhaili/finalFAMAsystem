<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiliksTable extends Migration
{
    public function up()
    {
        Schema::create('biliks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kapasiti');
            $table->string('lokasi');
            $table->string('nama_bilik');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
