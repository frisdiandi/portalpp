<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rencana extends Model
{
    protected $table='renana';
   protected $fillable=['judul','tahun','file','kategori'];
}
