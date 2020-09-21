<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengelolaan extends Model
{
   protected $table='pengelolaan';
   protected $fillable=['judul','tahun','file','opd','kategori'];
}
