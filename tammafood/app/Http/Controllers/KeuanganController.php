<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class KeuanganController extends Controller
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
    public function transaksi()
    {
        return view('/keuangan/p_inputtransaksi/transaksi');
    }

    public function hutang()
    {
        return view('/keuangan/l_hutangpiutang/hutang');
    }

    public function jurnal()
    {
        return view('/keuangan/l_jurnal/jurnal');
    }

    public function analisa()
    {
        return view('/keuangan/analisaprogress/analisa');
    }

    public function analisa2()
    {
        return view('/keuangan/analisaocf/analisa2');
    }

    public function analisa3()
    {
        return view('/keuangan/analisaaset/analisa3');
    }

    public function analisa4()
    {
        return view('/keuangan/analisacashflow/analisa4');
    }

    public function analisa5()
    {
        return view('/keuangan/analisaindex/analisa5');
    }

    public function analisa6()
    {
        return view('/keuangan/analisarasio/analisa6');
    }

    public function analisa7()
    {
        return view('/keuangan/analisabottom/analisa7');
    }

    public function analisa8()
    {
        return view('/keuangan/analisaroe/analisa8');
    }
    public function spk()
    {
        return view('/keuangan/spk/spk');
    }
}
