<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PurchasingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
        return view('purchasing/orderpembelian/order');
    }

    public function rencana()
    {
        return view('/purchasing/rencanapembelian/rencana');
    }
    
    public function belanja()
    {
        return view('/purchasing/belanjaharian/belanja');
    }

    public function tambah_belanja()
    {
        return view('/purchasing/belanjaharian/tambah_belanja');
    }

    public function pembelian()
    {
        return view('/purchasing/returnpembelian/pembelian');
    }

    public function suplier()
    {
        return view('/purchasing/belanjasuplier/suplier');
    }

    public function langsung()
    {
        return view('/purchasing/belanjalangsung/langsung');
    }

    public function produk()
    {
        return view('/purchasing/belanjaproduk/produk');
    }
    public function pasar()
    {
        return view('/purchasing/belanjapasar/pasar');
    }
    public function create()
    {
        return view('/purchasing/rencanapembelian/create');
    }
    public function tambah_pembelian()
    {
        return view('/purchasing/returnpembelian/tambah_pembelian');
    }
    public function tambah_order()
    {
        return view ('/purchasing/orderpembelian/tambah_order');
    }
    public function bahan()
    {
        return view('/purchasing/rencanabahanbaku/bahan');
    }
}
