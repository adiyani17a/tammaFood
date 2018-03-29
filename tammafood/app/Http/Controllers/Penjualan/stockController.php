<?php

namespace App\Http\Controllers\Penjualan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\m_item;

class stockController extends Controller
{
  public function tableStock(Request $request){
    if($request->numberload=='')
      $request->numberload=10;
    $stock=m_item::leftjoin('d_stock',function($join){
        $join->on('i_id', '=', 's_item');        
        $join->on('s_comp', '=', 's_position');                
        $join->on('s_comp', '=',DB::raw("'11'"));           
    })    
    ->where('i_type', '=',DB::raw("'BJ'"))
    ->orWhere('i_type', '=',DB::raw("'BP'"))   
    ->orderBy('i_name')
    //->toSql();
    ->paginate($request->numberload);    
    //dd($stock);

       if ($request->ajax()) {
            return view('penjualan.POSretail.stockRetail.table-stock', compact('stock'));
        }
        
    return view('penjualan.POSretail.stockRetail.stock',compact('stock'));
  }

  public function transferItem(Request $request){
    $term = $request->term;

    $results = array();

    $queries = m_item::  
    where('i_type', '=', DB::raw("'BP'"))
    ->where('i_name', 'like', DB::raw('"%'.$request->term.'%"'))        
    
    ->orWhere('i_type', '=', DB::raw("'BJ'"))
    ->where('i_name', 'like', DB::raw('"%'.$request->term.'%"'))       

    ->get();
    
    if ($queries == null) {
      $results[] = [ 'id' => null, 'label' =>'tidak di temukan data terkait'];
    } else {
      foreach ($queries as $query) 
      {
        if($query->s_qty=='')
          $query->s_qty=0;
        $results[] = [ 'id' => $query->i_id, 'label' =>$query->i_code.'-'. $query->i_name, 'code' => $query->i_code,
                       'name' => $query->i_name ];
      }
    }
 
   return Response::json($results);
  }
}

