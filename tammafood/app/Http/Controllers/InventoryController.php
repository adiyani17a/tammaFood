<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class InventoryController extends Controller
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
    public function suplier()
    {
        return view('inventory/p_suplier/suplier');
    }

    public function produksi()
    {
        return view('inventory/p_hasilproduksi/produksi');
    }

    public function cust()
    {
        return view('inventory/p_returncustomer/cust');
    }

    public function barang()
    {
        return view('inventory/b_digunakan/barang');
    }

    public function opname()
    {
        return view('inventory/stockopname/opname');
    }
     public function cari_nota_sup()
    {
        return view('inventory/p_suplier/cari_nota');
    }
    public function cari_nota_produksi()
    {
        return view('inventory/p_hasilproduksi/cari_nota');
    }
    public function cari_nota_cust()
    {
        return view('inventory/p_returncustomer/cari_nota');
    }
    public function tambah_barang()
    {
        return view('inventory/b_digunakan/tambah_barang');
    }
    public function tambah_opname()
    {
        return view('inventory/stockopname/tambah_opname');
    }
}
