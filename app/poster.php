<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poster extends Model
{
   protected $table='poster';
   protected $fillable=['judul','tahun','file'];
}
