<?php

namespace App\Http\Controllers\Penjualan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;

class POSGrosirController extends Controller
{
   public function grosir()
    { 
        $year = carbon::now()->format('y');
        $month = carbon::now()->format('m');
        $date = carbon::now()->format('d');

        //select max dari um_id dari table d_uangmuka
        $maxid = DB::Table('m_customer')->select('c_id')->max('c_id');
        $idfatkur = DB::Table('d_sales')->select('s_id')->max('s_id');
        $idreq = DB::table('d_transferitem')->select('ti_id')->max('ti_id');
        //untuk +1 nilai yang ada,, jika kosong maka maxid = 1 , 
        if ($maxid <= 0 || $maxid <= '') {
          $maxid  = 1;
        }else{
          $maxid += 1;
        }

        if ($idfatkur <= 0 || $idfatkur <= '') {
          $idfatkur  = 1;
        }else{
          $idfatkur += 1;
        }

        if ($idreq <= 0 || $idreq <= '') {
          $idreq  = 1;
        }else{
          $idreq += 1;
        }
        //jika kurang dari 100 maka maxid mimiliki 00 didepannya
        if ($maxid < 100) {
          $maxid = '00'.$maxid;
        }
          $id_cust = 'CUS' . $month . $year . '/' . 'C001' . '/' .  $maxid; 
          $fatkur = 'XX'  . $year . $month . $date . $idfatkur;
          $idreq = 'REQ'  . $year . $month . $date . $idreq;

          $dataitem = DB::table('m_item')->get();


          $detalis = DB::table('d_sales')->where('s_channel','RT')->get();

          $detaliss = DB::table('d_sales_dt')
            ->join('d_sales', 'd_sales_dt.sd_sales', '=', 'd_sales.s_id' )
            ->join('m_item', 'm_item.i_id', '=' , 'd_sales_dt.sd_item')->get();

          // $leagues = DB::table('d_sales_dt')
          //   ->select('s_date','i_name', DB::raw("sum(sd_qty) as jumlah"))
          //   ->join('m_item', 'm_item.i_id', '=' , 'd_sales_dt.sd_item')
          //   ->join('d_sales', 'd_sales.s_id', '=' , 'd_sales_dt.sd_sales')
          //   ->groupBy('sd_item')
          //   ->where('s_channel','RT')
          //   ->get();

          $stock  = DB::table('d_stock')->where('s_comp','11')->where('s_position','11')
            ->join('m_item', 'm_item.i_id', '=', 'd_stock.s_item')
            ->get();

          //detail request
          $request = DB::table('d_transferitem')->get();

        return view('/penjualan/POSgrosir/grosir',compact('id_cust','fatkur','customers','dataitem','cek','detaliss', 'stock','idreq','request'));
    }

    public function detail(Request $request)
    {
          $detaliss = DB::table('d_sales_dt')
                        ->select('*')
            ->join('d_sales', 'd_sales_dt.sd_sales', '=', 'd_sales.s_id' )
            ->join('m_item', 'm_item.i_id', '=' , 'd_sales_dt.sd_item')
            ->where('sd_sales','=',$request->x)->get();


        return view('/penjualan/POSgrosir.detail',compact('detaliss'));
    }

    public function detailReq(Request $request)
    {
        $request = DB::table('d_transferitem_dt')
            ->join('d_transferitem','d_transferitem.ti_id','=','d_transferitem_dt.tidt_id')
            ->join('m_item','m_item.i_id','=','d_transferitem_dt.tidt_item')
            ->where('ti_id','=',$request->g)->get();

        return view('/penjualan/POSgrosir.detailReq_rit',compact('request'));
    }


    public function store(Request $request)
    {

      $maxid = DB::Table('m_customer')->select('id_cus_ut')->max('id_cus_ut');
       if ($maxid <= 0 || $maxid <= '') {
          $maxid  = 1;
        }else{
          $maxid += 1;
        }

      $customer = DB::table('m_customer')
            ->insert([
              'id_cus_ut' => $maxid,
              'id_cus' => $request->id_cus_ut,
              'nama_cus' => $request->nama_cus,
              'tgl_lahir' => $request->tgl_lahir,
              'email' => $request->email,
              'tipe_cust' => $request->tipe_cust,
              'no_hp' => $request->no_hp,
              'alamat' => $request->alamat,
              'created_at' => Carbon::now()
            ]);
    }    

  public function autocomplete(Request $request)
   {
    $term = $request->term;

    $results = array();
    
    $queries = DB::table('m_customer')
      ->where('m_customer.c_name', 'LIKE', '%'.$term.'%')
      ->take(50)->get();
    
    if ($queries == null) {
      $results[] = [ 'id' => null, 'label' =>'tidak di temukan data terkait'];
    } else {
      foreach ($queries as $query) 
      {
        $results[] = [ 'id' => $query->c_id, 'label' => $query->c_name .'  '.$query->c_address, 'alamat' => $query->c_address.' '.$query->c_hp ];
      }
    } 
  return Response::json($results);
  }

  public function autocompleteitem(Request $request)
  {
    $term = $request->term;

    $results = array();
  
    $queries = DB::table('m_item')
      // ->select('i_id','i_kode','i_nama','i_satuan','i_hargajual','s_qty','i_tipe','s_comp','s_position')
      ->leftJoin('d_stock','m_item.i_id','=', 'd_stock.s_item')
      // ->orWhere(function ($a) use ($term) {
      //           $a->orWhere('i_tipe','BJ')
      //             ->orWhere('i_tipe','BP');
      //       })
      ->orWhere(function ($b) use ($term) {
                $b->where('s_comp','3')
                  ->where('s_position','3');
            })
      ->where(function ($d) use ($term) {
                $d->orWhere('m_item.i_type', 'LIKE', '%'.$term.'%')
                  ->orWhere('m_item.i_name', 'LIKE', '%'.$term.'%');
            })
      ->take(50)->get();

    if ($queries == null) {
      $results[] = [ 'i_id' => null, 'label' =>'tidak di temukan data terkait'];
    } else {
      foreach ($queries as $query) 
      {
        $results[] = [ 'id' => $query->i_id, 'label' => $query->i_code .' - '. $query->i_name,
        // ' ( Rp. '.number_format($query->i_hargajual,0,',','.').')'. 
                       'harga' => $query->i_price, 'kode' => $query->i_id, 'nama' => $query->i_name, 'satuan' => $query->i_unit, 's_qty'=>$query->s_qty ];
      }
    }
 
  return Response::json($results); 
  }

  public function autocompletereq(Request $request)
  {
    $term = $request->term;

    $results = array();
    
    $queries = DB::table('m_item')
      // ->select('i_id','i_kode','i_nama','i_satuan','i_hargajual','s_qty','i_tipe','s_comp','s_position')
      ->leftJoin('d_stock','m_item.i_id','=', 'd_stock.s_item')
      ->where(function ($a) use ($term) {
                $a->orWhere('i_tipe','BJ')
                  ->orWhere('i_tipe','BP');
            })
      ->where(function ($b) use ($term) {
                $b->where('s_comp','3')
                  ->where('s_position','3');
            })
      ->where(function ($d) use ($term) {
                $d->orWhere('m_item.i_type', 'LIKE', '%'.$term.'%')
                  ->orWhere('m_item.i_name', 'LIKE', '%'.$term.'%');
            })
      ->take(50)->get();
    if ($queries == null) {
      $results[] = [ 'i_id' => null, 'label' =>'tidak di temukan data terkait'];
    } else {
      foreach ($queries as $query) 
      {
        $results[] = [ 'id' => $query->i_id, 'label' => $query->i_code .' - '. $query->i_name,
                       'harga' => $query->i_price, 'kode' => $query->i_id, 'nama' => $query->i_name, 'satuan' => $query->i_unit, 'stok' => $query->s_qty ];
      }
    }
  return Response::json($results); 
  }

  public function setnama($id)
  {

   $setnama = DB::table('m_customer')->where('c_name',$id)->first();

    return Response::json($setnama);
  }

  public function setitem($flag)
  {

   $setnama = DB::table('m_item')->where('nama_item',$flag)->orWhere('nama_item',$flag)->first();
    return Response::json($setnama);
  }

  public function sal_save_final(Request $request)
  { 
      // dd($request->all());
      $customer = DB::table('d_sales')
          ->insert([
            's_id' =>$request->s_id,
            's_channel' =>'GR',
            's_date' =>date('Y-m-d',strtotime($request->s_date)),
            's_nota' =>$request->s_nota,
            's_staff' =>$request->s_staff,
            's_customer' => $request->id_cus,
            's_disc_percent' => $request->s_disc_percent,
            's_disc_value' => $request->s_disc_value,
            's_gross' => ($this->konvertRp($request->s_gross)),
            's_tax' => $request->s_pajak,
            's_net' => $request->s_net,
            's_payment' => ($this->konvertRp($request->s_dibayarkan)),
            's_type' => 'FN',
            's_insert' => Carbon::now(),
            's_update' => $request->s_update
            
          ]);

          $s_id= DB::table('d_sales')->max('s_id');

          for ($i=0; $i < count($request->kode_item); $i++) 
          {

          $stokGrosir = DB::table('d_stock')
          ->where('s_comp','3')
          ->where('s_position','3')
          ->where('s_item',$request->kode_item[$i])->first(); 

          $d_sales_dt = DB::table('d_sales_dt')
              ->insert([
                'sd_sales'=>$s_id,
                'sd_detailid'=>$i+1,
                'sd_item'=>$request->kode_item[$i],
                'sd_qty'=>$request->sd_qty[$i],
                'sd_price'=>($this->konvertRp($request->harga_item[$i])),
                'sd_total'=>($this->konvertRp($request->hasil[$i])),
                'sd_disc_percent'=>$request->sd_disc_percent[$i],
                'sd_disc_value'=>$request->sd_disc_value[$i]

            ]);

          $stokBaru = $stokGrosir->s_qty - $request->sd_qty[$i];

          DB::table("d_stock")
          ->where('s_comp','3')
          ->where('s_position','3')
          ->where("s_id", $stokGrosir->s_id)
          ->update(['s_qty' => $stokBaru]);
          }
  }

    public function sal_save_draft(Request $request)
  {
        // dd($request->all());
        $customer = DB::table('d_sales')
            ->insert([
              's_id' =>$request->s_id,
              's_channel' =>'GR',
              's_date' =>date('Y-m-d',strtotime($request->s_date)),
              's_nota' =>$request->s_nota,
              's_staff' =>$request->s_staff,
              's_customer' => $request->id_cus,
              's_disc_percent' => $request->s_disc_percent,
              's_disc_value' => $request->s_disc_value,
              's_gross' => ($this->konvertRp($request->s_gross)),
              's_tax' => $request->s_pajak,
              's_net' => $request->s_net,
              's_payment' => ($this->konvertRp($request->s_dibayarkan)),
              's_type' => 'DF',
              's_insert' => Carbon::now(),
              's_update' => $request->s_update
              
            ]);

            $s_id= DB::table('d_sales')->max('s_id');

            for ($i=0; $i < count($request->kode_item); $i++) 
            { 

            $d_sales_dt = DB::table('d_sales_dt')
                ->insert([
                  'sd_sales'=>$s_id,
                  'sd_detailid'=>$i+1,
                  'sd_item'=>$request->kode_item[$i],
                  'sd_qty'=>$request->sd_qty[$i],
                  'sd_price'=>($this->konvertRp($request->harga_item[$i])),
                  'sd_total'=>($this->konvertRp($request->hasil[$i])),
                  'sd_disc_percent'=>$request->sd_disc_percent[$i],
                  'sd_disc_value'=>$request->sd_disc_value[$i]
              ]);
              
            }

  }

  public function sal_save_onProgres(Request $request)
  {
        // dd($request->all());
        $customer = DB::table('d_sales')
            ->insert([
              's_id' =>$request->s_id,
              's_channel' =>'GR',
              's_date' =>date('Y-m-d',strtotime($request->s_date)),
              's_nota' =>$request->s_nota,
              's_staff' =>$request->s_staff,
              's_customer' => $request->id_cus,
              's_disc_percent' => $request->s_disc_percent,
              's_disc_value' => $request->s_disc_value,
              's_gross' => ($this->konvertRp($request->s_gross)),
              's_tax' => $request->s_pajak,
              's_net' => $request->s_net,
              's_payment' => ($this->konvertRp($request->s_dibayarkan)),
              's_type' => 'PR',
              's_insert' => Carbon::now(),
              's_update' => $request->s_update              
            ]);

            $s_id= DB::table('d_sales')->max('s_id');

            for ($i=0; $i < count($request->kode_item); $i++) 
            { 


            $stokRetail = DB::table('d_stock')
            ->where('s_comp','3')
            ->where('s_position','3')
            ->where('s_item',$request->kode_item[$i])->first();

            $d_sales_dt = DB::table('d_sales_dt')
                ->insert([
                  'sd_sales'=>$s_id,
                  'sd_detailid'=>$i+1,
                  'sd_item'=>$request->kode_item[$i],
                  'sd_qty'=>$request->sd_qty[$i],
                  'sd_price'=>($this->konvertRp($request->harga_item[$i])),
                  'sd_total'=>($this->konvertRp($request->hasil[$i])),
                  'sd_disc_percent'=>$request->sd_disc_percent[$i],
                  'sd_disc_value'=>$request->sd_disc_value[$i]

              ]);

           $stokBaru = $stokRetail->s_qty - $request->sd_qty[$i];

            DB::table("d_stock")
            ->where('s_comp','3')
            ->where('s_position','3')
            ->where("s_id", $stokRetail->s_id)
              ->update(['s_qty' => $stokBaru]);
              
            }

  }
 
    public function distroy($id)
    {
       DB::table('d_sales')->where('s_id',$id)->where('s_type','DRAFT')->delete();

     return redirect('/penjualan/POSgrosir/grosir');
    }

    public function konvertRp($value)
    {
    $value = str_replace(['Rp', '\\', '.', ' '], '', $value);
    return str_replace(',', '.', $value);
    }

    public function tambahItemReq(Request $request)
    {
      
      return DB::transaction(function() use ($request)
      {
      // dd($request->all());
      for ($i=0; $i < count($request->kodeItemReq); $i++) 
        { 
            $stokGrosir = DB::table('d_stock')
                ->where('s_comp','3')
                ->where('s_position','3')
                ->where('s_item',$request->kodeItemReq[$i])->first();

            $s_id= DB::table('d_stock')->max('s_id');

            DB::table('d_stock')
            ->insert([
                's_id'=>$s_id+1,
                's_comp'=>'11',
                's_position'=>'3',
                's_item'=>$request->kodeItemReq[$i],
                's_qty'=>$request->tambahItemReq[$i],
                // 's_insert' => $request->s_insert[$i],
                // 's_update' => $request->s_update[$i]
            ]);

            DB::table('d_transferitem_dt')
              ->update([
                    'tidt_id'=>$request->rd_request[$i],
                    'tidt_detail'=>$request->rd_detail[$i],
                    'tidt_item'=>$request->rd_item[$i],
                    'tidt_qty'=>$request->rd_qty[$i],
                    'tidt_qty_appr'=>$request->tambahItemReq[$i]
              ]);

            $stokBaru = $stokGrosir->s_qty - $request->tambahItemReq[$i];

            DB::table("d_stock")
              ->where('s_comp','3')
              ->where('s_position','3')
              ->where("s_id", $stokGrosir->s_id)
              ->update(['s_qty' => $stokBaru]);
        }
  });
  }

  function getTanggal($tgl1,$tgl2){

      $y = substr($tgl1, -4);
      $m = substr($tgl1, -7,-5);
      $d = substr($tgl1,0,2);
       $tgll = $y.'-'.$m.'-'.$d;

      $y2 = substr($tgl2, -4);
      $m2 = substr($tgl2, -7,-5);
      $d2 = substr($tgl2,0,2);
        $tgl2 = $y2.'-'.$m2.'-'.$d2;

      $detalis = DB::table('d_sales')
        ->where('s_type','GR')
        ->where('s_date','>=',$tgll)
        ->where('s_date','<=',$tgl2)
        ->get();

    return view('/penjualan/POSgrosir/dt_notaJual',compact('detalis'));
    }

  function getTanggalJual($tgl1,$tgl2){

      $y = substr($tgl1, -4);
      $m = substr($tgl1, -7,-5);
      $d = substr($tgl1,0,2);
       $tgll = $y.'-'.$m.'-'.$d;

      $y2 = substr($tgl2, -4);
      $m2 = substr($tgl2, -7,-5);
      $d2 = substr($tgl2,0,2);
        $tgl2 = $y2.'-'.$m2.'-'.$d2;

      $leagues = DB::table('d_sales_dt')
        ->select('s_date','i_name' , DB::raw("sum(sd_qty) as jumlah"))
        ->join('m_item', 'm_item.i_id', '=' , 'd_sales_dt.sd_item')
        ->join('d_sales', 'd_sales.s_id', '=' , 'd_sales_dt.sd_sales')
        ->groupBy('sd_item','s_date')
        ->where('s_type','GR')
        ->where('s_date','>=',$tgll)
        ->where('s_date','<=',$tgl2)
        ->get();
      // return $leagues;

    return view('/penjualan/POSgrosir.Data_JualGrosir',compact('leagues'));
    }

}

// select s_date, sd_item, sum(sd_qty) as jumlah from d_sales
// join d_sales_dt on s_id = sd_sales
// where s_type = "GROSIR"
// group by sd_item

