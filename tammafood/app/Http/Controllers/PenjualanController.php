<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use app\Customer;
use Carbon\carbon;
use DB;

class PenjualanController extends Controller
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
    public function harga()
    {
        return view('/penjualan/manajemenharga/harga');
    }

    public function promosi()
    {
        return view('/penjualan/manajemenpromosi/promosi');
    }

    public function promosi2()
    {
        return view('/penjualan/broadcastpromosi/promosi2');
    }

    public function rencana()
    {
        return view('/penjualan/rencanapenjualan/rencana');
    }

    public function monitoringorder()
    {
        return view('/penjualan/monitoringorder/monitoring');
    }

    public function retail()
    {

        $year = carbon::now()->format('y');
        $month = carbon::now()->format('m');

             //select max dari um_id dari table d_uangmuka
        $maxid = DB::Table('customer')->select('id_cus_ut')->max('id_cus_ut');

        //untuk +1 nilai yang ada,, jika kosong maka maxid = 1 , 

        if ($maxid <= 0 || $maxid <= '') {
          $maxid  = 1;
        }else{
          $maxid += 1;
        }
        
        //jika kurang dari 100 maka maxid mimiliki 00 didepannya
        if ($maxid < 100) {
          $maxid = '00'.$maxid;
        }
           $id_cust = 'CUS' . $month . $year . '/' . 'C001' . '/' .  $maxid;   
            return view('/penjualan/POSretail/retail', compact('id_cust'));
    }

    public function grosir()
    {
         $year = carbon::now()->format('y');
        $month = carbon::now()->format('m');

             //select max dari um_id dari table d_uangmuka
        $maxid = DB::Table('customer')->select('id_cus_ut')->max('id_cus_ut');

        //untuk +1 nilai yang ada,, jika kosong maka maxid = 1 , 

        if ($maxid <= 0 || $maxid <= '') {
          $maxid  = 1;
        }else{
          $maxid += 1;
        }
        
        //jika kurang dari 100 maka maxid mimiliki 00 didepannya
        if ($maxid < 100) {
          $maxid = '00'.$maxid;
        }
           $id_cust = 'CUS' . $month . $year . '/' . 'C001' . '/' .  $maxid;   
            return view('/penjualan/POSgrosir/grosir', compact('id_cust'));
        
    }

    public function r_penjualan()
    {
        return view('/penjualan/manajemenreturn/r_penjualan');
    }

    public function progress()
    {
        return view('/penjualan/monitorprogress/progress');
    }
    public function tambah_rencana()
    {
        return view('/penjualan/rencanapenjualan/tambah_rencana');
    }
    public function mutasi()
    {
      return view('/penjualan/mutasistok/mutasi');
    }
    public function tambah_promosi2()
    {
      return view('/penjualan/broadcastpromosi/tambah_promosi2');
    }
}
