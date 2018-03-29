<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\mMember;
use App\d_comp_coa;
use App\d_comp_trans;
use App\d_comp;
use Validator;
use Carbon\Carbon;
use Session;

use DB;

class loginController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(){
        $this->middleware('guest');
    }

    public function login(Request $req) {
        $username = $req->username;
        $password = $req->password;
        $user = mMember::whereRaw("m_username  = '$req->username'")->first();
        if ($user && $user->m_passwd == sha1(md5('passwordAllah') + $req->password)) {
            return response()->json([
                        'success' => 'succes',
            ]);
        } else {
            return response()->json([
                        'success' => 'gagal',
            ]);
        }
    }

    public function authenticate(Request $req) {
      
        $rules = array(
            'username' => 'required|min:4', // make sure the email is an actual email
            'password' => 'required|min:4' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {           
                $dataInfo=['status'=>'gagal','data'=>'Panjang Karakter Password atau Nama Harus Minimal 4 Karakter '];            
                return json_encode($dataInfo);
        } else {

            $username = $req->username;
            $password = $req->password;
            //$user = mMember::where("m_username  = '$req->username'")->first();
            $user = mMember::where("m_username",$req->username)->first();
            //dd($user);

               
            if ($user && $user->m_passwd == sha1(md5('passwordAllah').$req->password)) {

               // Auth::login($user); //set login
                
                 $user1=mMember::find($user->m_id);
                 $user1=$user->update([
                     'm_lastlogin'=>Carbon::now(),
                 ]);              

                    Auth::login($user);
                     $dataInfo=['status'=>'sukses','nama'=>$user->m_name];            
                      return json_encode($dataInfo);
            } else {
              
                          

                 $dataInfo=['status'=>'gagal','data'=>'Password atau Nama Tidak Di Temukan'];            
                      return json_encode($dataInfo);
            }
        }
    }

}
