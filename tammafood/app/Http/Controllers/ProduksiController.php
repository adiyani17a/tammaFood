<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ProduksiController extends Controller
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
    public function produksi()
    {
        return view('/produksi/rencanaproduksi/produksi');
    }

    public function monitoring()
    {
        return view('/produksi/monitoringprogress/monitoring');
    }

     public function spk()
    {
        return view('/produksi/spk/spk');
    }

     public function baku()
    {
        return view('/produksi/bahanbaku/baku');
    }

     public function sdm()
    {
        return view('/produksi/sdm/sdm');
    }

     public function produksi2()
    {
        return view('/produksi/produksi/produksi2');
    }

     public function produksi3()
    {
        return view('/produksi/o_produksi/produksi3');
    }

     public function waste()
    {
        return view('/produksi/waste/waste');
    }
    public function tambah_produksi()
    {

        return view('/produksi/o_produksi/tambah_produksi');
    }
}
