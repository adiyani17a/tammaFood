<?php

namespace App\Http\Controllers\Penjualan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\d_transferItem;
use App\d_transferItemDt;
use DB;
class transferItemController extends Controller
{
    public function simpanTransfer(Request $request)
    {
    	DB::transaction(function () use ($request) {
    		
    	$ti_id=d_transferItem::max('ti_id')+1;
    	d_transferItem::create([
    				'ti_id'			=>$ti_id,
    				'ti_time'		=>date('Y-m-d',strtotime($request->ri_tanggal)), 
    				'ti_code'		=>$request->ri_nomor, 
    				'ti_order'		=>'RT',
    				//'ti_orderstaff'	=>,
    				'ti_note'		=>$request->ri_keterangan,
    				
    	]);
    	$tidt_id=d_transferItemDt::where('tidt_id',$ti_id)->max('tidt_detail')+1;
    	for ($i=0; $i <count($request->kode_item) ; $i++) { 
    			 d_transferItemDt::create([
    				'tidt_id'			=>$ti_id,
    				'tidt_detail'		=>$tidt_id, 
    				'tidt_item'		=>$request->kode_item[$i], 
    				'tidt_qty'		=>$request->sd_qty[$i]
    			]);
    	}
       
    });

    }
}
