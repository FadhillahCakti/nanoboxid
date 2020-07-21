<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdukasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edukasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->unique();
            $table->string('gambar')->unique();
            $table->text('paragraf1')->unique();
            $table->string('paragraf2')->unique();
            $table->string('paragraf3')->nullable();
            $table->string('paragraf4')->nullable();
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
        Schema::dropIfExists('edukasi');
    }
}