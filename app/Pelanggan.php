<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
 public function pesan()
 {
     return $this->hasMany('App\Pesan','pelanggan_id','id');
 }
}
