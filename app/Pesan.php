<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    public function pelanggan()
    {
        return $this->belongsTo('App\Pelanggan','pelanggan_id','id');
    }
    public function pesan_detail()
    {
        return $this->hasMany('App\Pesan','pesan_id','id');
    }
   
}
