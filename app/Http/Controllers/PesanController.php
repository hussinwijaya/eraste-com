<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Pesan;
use App\Pengguna;
use App\PesanDetail;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
      
    }

    public function index($id)
    {
    	$produk = Produk::where('id', $id)->first();

    	return view('pemesanan.index', compact('produk'));
    }
    public function pesan(Request $request, $id)
    {	
    	$barang = Barang::where('id', $id)->first();
    	$tanggal = Carbon::now();
    }
}