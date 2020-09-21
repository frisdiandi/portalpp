<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengelolaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengelolaan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('file');
            $table->string('opd');            
            $table->string('tahun');            
            $table->string('kategori');                 
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
        Schema::dropIfExists('pengelolaan');
    }
}
