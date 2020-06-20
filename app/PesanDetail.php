<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesanDetail extends Model
{
    public function produk()
    {
        return $this->belongsTo('App\Produk','produk_id','id');
    }

    public function pesan()
    {
        return $this->belongsto('App\Pesan','pesan_id','id');
    }
   
}
