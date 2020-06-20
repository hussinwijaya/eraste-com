<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\User;
use App\PesananDetail;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
      
    }

    public function index($id)
    {
    	$produk = Produk::where('id', $id)->first();

    	return view('pemesanansan.index', compact('produk'));
    }
}