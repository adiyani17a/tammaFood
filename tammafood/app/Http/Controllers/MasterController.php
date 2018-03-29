<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Customer;
use DB;
use Carbon\carbon;
use Session;
use Exception;
use Yajra\Datatables\Datatables;

class MasterController extends Controller
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
        return view('/master/datasuplier/suplier');
    }

     public function cust()
    {

         $list_cust = Customer::all();

        return view('master/datacust/cust', ['customer' => $list_cust], compact('list_cust'));     
    }

    public function barang()
    {
        return view('master.databarang.barang');
    }

    public function tambah_barang()
    {
        return view('master.databarang.tambah_barang');
    }

     public function getdata()
    {
    $getdata = Customer::select('*')->get();
    return Datatables::of($getdata)
    ->addColumn('action', function ($getdata) {
                    return'<div class="">    
                               <a href="cust_edit/'.$getdata->id_cus_ut.'" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                               <a href="cust_delete/'.$getdata->id_cus_ut.'" class="btn btn-danger btn-sm" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                          </div>   ';
                })
    ->make(true);
    }


    public function cust_edit($id_cus_ut)
    {
        
        $edit_cust = Customer::find($id_cus_ut);
         
        return view('/master/datacust/edit_cust', ['edit_cust' => $edit_cust] , compact('edit_cust', 'id_cus_ut'));       
    }

    public function cust_edit_proses(Request $request, $id_cus_ut)
    {   
        try
        {
            $customer = Customer::findOrfail($id_cus_ut);
            $customer->id_cus_ut= $request->id_cus_ut;
            $customer->id_cus = $request->id_cus;
            $customer->nama_cus = $request->nama_cus;
            $customer->tgl_lahir = $request->tgl_lahir;
            $customer->email = $request->email;
            $customer->no_hp = $request->no_hp;
            $customer->alamat = $request->alamat;
            $customer->tipe_cust = $request->tipe_cust;
            $customer-> save();
            Session::flash('success', 'Customer berhasil diupdate!', 'Sukses!');
            return redirect('/master/datacust/cust');
        }catch(Exception $customer){
            Session::flash('error', 'Customer gagal diupdate!', 'Gagal!');
            return redirect('/master/datacust/edit_cust');
        }
    }

    public function simpan_cust(Request $request)
    {
        
        try{
        
        $maxid = DB::Table('customer')->max('id_cus_ut');

        //untuk +1 nilai yang ada,, jika kosong maka maxid = 1 , 

        if ($maxid <= 0 || $maxid <= '') {
            $maxid  = 1;
        }else{
            $maxid += 1;
        }
    

       $customer = new Customer;
       $customer->id_cus_ut = $maxid;
       $customer->id_cus = $request->id_cus_ut;
        $customer->nama_cus = $request->nama_cus;
        $customer->tgl_lahir = $request->tgl_lahir;
        $customer->email = $request->email;
        $customer->no_hp = $request->no_hp;
        $customer->alamat = $request->alamat;
        $customer->tipe_cust = $request->tipe_cust;
        $customer-> save();
        Session::flash('success', 'Customer berhasil ditambahkan!', 'Sukses!');
        
    }catch(Exception $customer)
        {
            Session::flash('error', 'Customer gagal ditambahkan!', 'Gagal!');
            return redirect('/master/datacust/tambah_cust');
        }
        
        return redirect('/master/datacust/cust');
    }
   

     public function baku()
    {
        return view('/master/databaku/baku');
    }

    public function tambah_baku()
    {
        return view('/master/databaku/tambah_baku');
    }

     public function jenis()
    {
        return view('/master/datajenis/jenis');
    }

    public function tambah_jenis()
    {
        return view('/master/datajenis/tambah_jenis');
    }

     public function pegawai()
    {
        return view('/master/datapegawai/pegawai');
    }

     public function keuangan()
    {
        return view('/master/datakeuangan/keuangan');
    }

     public function transaksi()
    {
        return view('/master/datatransaksi/transaksi');
    }
    public function tambah_suplier()
    {

        return view('/master/datasuplier/tambah_suplier');
    }


    public function tambah_cust()
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
            return view('/master/datacust/tambah_cust', compact('id_cust'));
        }

     public function cust_delete($id_cus_ut)
    {

         try{
       
        $del = Customer::findOrFail($id_cus_ut);

        $del->delete();
        Session::flash('success', 'Data Berhasil dihapus!', 'Peringatan!');
    }
    catch(Exception $del) {
        Session::flash('error', 'Data gagal dihapus!', 'Peringatan!');
    }


        return redirect('/master/datacust/cust');
    }
    public function tambah_transaksi()
    {
        return view('/master/datatransaksi/tambah_transaksi');
    }
    public function tambah_pegawai()
    {
        return view('/master/datapegawai/tambah_pegawai');
    }
}
