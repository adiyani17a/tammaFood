<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;
use Auth;

class mMember extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword;

    protected $table = 'd_mem';
    protected $primaryKey = 'm_id';
    public $incrementing = false;
    public $remember_token = false;
    //public $timestamps = false;

    const UPDATED_AT = 'm_update';
    const CREATED_AT = 'm_insert';

    protected $fillable = ['m_id','m_username', 'm_passwd', 'm_paket', 'm_name','m_addr'];

    public function getUpdatedAtAttribute() {
        return $this->attributes['m_update'];
    }

    public function setUpdatedAtAttribute($value) {
        //$this->attributes['a_updated'] = $value;
        // this may not work, depends if it's a Carbon instance, and may also break the above - you may have to clone the instance
        $this->attributes['m_update'] = $value->setTimezone('UTC');
    }

    public function setCreatedAtAttribute($value) {
        //$this->attributes['a_updated'] = $value;
        // this may not work, depends if it's a Carbon instance, and may also break the above - you may have to clone the instance
        //$this->attributes['a_updated'] = $value->setTimezone('UTC');
    }

    public function getSupplierName($id){
        $data = DB::table('d_comp')->where('c_id', '=', $id)->first();

        return $data->c_name;
    }

    public function access(){
        return $this->belongsToMany('App\d_access', 'd_mem_access', 'ma_member', 'ma_access');
    }

    public function company(){
        return $this->belongsToMany('App\d_comp', 'd_mem_comp', 'mc_mem', 'mc_comp');
    }
    
    public function isAdminPusat(){
        dd('d');
        $cek = DB::table('d_comp_mem')
               ->where('cm_mem', '=', Auth::user()->m_id)
               ->where('cm_comp', '=', 'AA00000030')->get();
        
        return (bool)count($cek);
    }
    
  
    
    
    public function punyaAkses($fitur,$aksi){
      // select * from  join  on = where ubah =true

         $cek = DB::table('d_mem')
                ->join('hak_akses', 'level', '=', 'm_level')
                ->where('menu', '=', $fitur)
                ->where($aksi, '=', true) 
                ->where('m_id', '=', Auth::user()->m_id)             
                ->get();        
        
        if(count($cek) != 0)
            return true;
        else
            return false;
    }
  
}
