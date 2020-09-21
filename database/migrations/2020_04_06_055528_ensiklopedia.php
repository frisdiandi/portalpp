<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ensiklopedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ensiklopedia', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->date('tanggal'); 
            $table->text('desc');
            $table->string('gambar');            
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
        Schema::dropIfExists('ensiklopedia');
    }
}
