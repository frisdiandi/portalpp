<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gap extends Model
{
   protected $table='gap';
   protected $fillable=['judul','tahun','file'];
   
}
