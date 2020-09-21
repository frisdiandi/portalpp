<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spip extends Model
{
     protected $table='spip';
   protected $fillable=['judul','tahun','file'];
}
