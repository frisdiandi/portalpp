<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akuntabilitas extends Model
{
    protected $table='akuntabilitas';
   protected $fillable=['judul','tahun','file','opd'];
}
