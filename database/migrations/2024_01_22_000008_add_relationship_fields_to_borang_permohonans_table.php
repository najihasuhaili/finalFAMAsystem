<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBorangPermohonansTable extends Migration
{
    public function up()
    {
        Schema::table('borang_permohonans', function (Blueprint $table) {
            $table->unsignedBigInteger('nama_bilik_id')->nullable();
            $table->foreign('nama_bilik_id', 'nama_bilik_fk_9417574')->references('id')->on('biliks');
        });
    }
}
