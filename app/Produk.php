<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function pesan_detail()
    {
        return $this->hasMany('App\PesanDetail','produk_id','id');
    }
   
   
}
