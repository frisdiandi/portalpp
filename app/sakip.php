<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sakip extends Model
{
   protected $table='sakip';
   protected $fillable=['judul','tahun','file','instansi'];
}
