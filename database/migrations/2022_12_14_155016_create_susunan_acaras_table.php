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
        Schema::create('susunan_acaras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('undangan_id');
            $table->foreign('undangan_id')->references('id')->on('undangans');
            $table->string('nama_acara');
            $table->time('jam');
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
        Schema::dropIfExists('susunan_acaras');
    }
};
