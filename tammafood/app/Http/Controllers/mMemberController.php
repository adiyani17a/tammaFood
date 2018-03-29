<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\mMember;
use App\d_access;
use Validator;
use DB;
use Session;
use Carbon\Carbon;

class mMemberController extends Controller {

    public function index() {
        $listMember = mMember::all();
        //if(Auth::user()->punyaAkses('melihat', 'user'))
            return view('setting.member.index', compact('listMember'));
        //else
            //return view('errors.not_permited');
    }

    public function create() {
        $access = d_access::select('a_detail')->distinct('a_detail')->get();
        return view('setting.member.create')->withAccess($access);
    }

    public function store(Request $req) { 
        //dd($req);     
        $rules = array(
            'Nama_Panggilan' => 'required|unique:d_mem,m_username', // make sure the email is an actual email
            'Password' => 'required|min:6',
            'Nama_Lengkap' => 'required|min:6',
            'Tgl_Lahir' => 'required|min:6',
            'hak_akses' => 'required'
        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return Redirect()->back()
                            ->withInput()
                            ->withErrors($validator);
//           
        } else {
            //dd($req);
            $nomor = mMember::orderBy('m_id', 'DESC')->first();
            $nomor = intval(substr($nomor->m_id, strlen('BFM'))) + 1;
            $awalan = 'BFM';
            $memberIns = mMember::create([            
                'm_id' => $awalan . $nomor,
                'm_username' => $req->Nama_Panggilan,
                'm_passwd' => sha1(md5('passwordAllah') + $req->Password),                
                'm_name' => $req->Nama_Lengkap,            
            ]);
            $memberIns->access()->attach($req->hak_akses);
            Session::flash('sukses', 'member baru berhasil ditambahkan');
            return Redirect('member');
        }
    }

    public function edit($id) {
        $member=mMember::find($id);

        // if(Auth::user()->haveAccessTo('mengupdate', 'user'))
        //     return "ada kok";
        // else
        //     return 'enggak ada';

        $access = d_access::select('a_detail')->distinct('a_detail')->get();
        return view('setting.member.edit',compact('member', 'access'));
        
    }
    public function update($id,Request $req) {
        $member=mMember::find($id);
         $rules = array(
            'Nama_Panggilan' => 'required',
            'Nama_Lengkap' => 'required|min:6',
            'Tgl_Lahir' => 'required|min:6',
            'hak_akses' => 'required'
        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return Redirect('member/edit/'.$id)
                            ->withInput()
                            ->withErrors($validator); // send back the input (not the password) so that we can repopulate the form
        } else {                        
            if ($req->Password != null) {
                $member->update([
                    'm_username' => $req->Nama_Panggilan,
                    'm_passwd' => sha1(md5('passwordAllah') + $req->Password),

                    'm_name' => $req->Nama_Lengkap,
                ]);
            } else if ($req->Password == null) {
                $member->update([
                    'm_username' => $req->Nama_Panggilan,                    
                    'm_name' => $req->Nama_Lengkap,
                ]);
            }

            $member->access()->sync($req->hak_akses);

            Session::flash('sukses', 'member baru berhasil diupdate');
            return Redirect('member');
            
            
        }
        
    }
    public function logout() {
        //dd(Carbon::now());
        $user = mMember::find(Auth::user()->m_id);
        $use = $user->update([
            'm_lastlogout' => Carbon::now(),
        ]);

        Auth::logout();
        Session::forget('key');
        return Redirect('/');
    }

//    public function tambahuser(Request $req) {
//        $nomor = mMember::orderBy('m_id', 'DESC')->first();
//        $nomor = intval(substr($nomor->m_id, strlen('BFM'))) + 1;
//        $awalan = 'BFM';
//        $rules = array(
//            'username' => 'required|unique:d_mem,m_username', // make sure the email is an actual email
//            'password' => 'required|min:6',
//            //'paket' => 'required',
//            'name' => 'required|min:6',
//        );
//        $validator = Validator::make($req->all(), $rules);
//        if ($validator->fails()) {
//
//            return response()->json([
//                        'success' => false,
//                        'errors' => $validator->errors()->toArray()
//            ]);
//
////            return Redirect('management_user')
////                            ->withInput()
////                            ->withErrors($validator); // send back the input (not the password) so that we can repopulate the form
////            return Redirect('management_user')
////                            ->withInput()
////                            ->withErrors($validator); // send back the input (not the password) so that we can repopulate the form
//        } else {
//            mMember::create([
//                'm_id' => $awalan . $nomor,
//                'm_username' => $req->username,
//                'm_passwd' => sha1(md5('passwordAllah') + $req->password),
//                //  'm_paket' => $req->paket,
//                'm_name' => $req->name,
//            ]);
//            return response()->json([
//                        'success' => true,
//            ]);
//
//            // return Redirect('management_user');
//        }
//    }
//
//    public function ubahuser(Request $req) {
//        $m = $req->id;
//        $str = preg_replace('/\s+/', '', $m);
//        $edituser = mMember::findOrFail($str);
//        return $edituser;
//    }
//
//    public function updateuser(Request $req) {
//        $rules = array(
//            'username' => 'required', // make sure the email is an actual email            
//            // 'paket' => 'required',
//            'name' => 'required|min:3',
//        );
//        $validator = Validator::make($req->all(), $rules);
//        if ($validator->fails()) {
////             return response()->json([
////                'success' => false,
////                'errors'   => $validator->errors()->toArray()
////                ]);
//            return Redirect('management_user')
//                            ->withInput()
//                            ->withErrors($validator); // send back the input (not the password) so that we can repopulate the form
//        } else {
//            $m = $req->m_id;
//            $str = preg_replace('/\s+/', '', $m);
//            $edituser = mMember::findOrFail($str);
//            if ($req->password != null) {
//                $edituser->update([
//                    'm_username' => $req->username,
//                    'm_passwd' => sha1(md5('passwordAllah') + $req->password),
//                    //'m_paket' => $req->paket,
//                    'm_name' => $req->name,
//                ]);
//            } else if ($req->password == null) {
//                $edituser->update([
//                    'm_username' => $req->username,
//                    // 'm_paket' => $req->paket,
//                    'm_name' => $req->name,
//                ]);
//            }
//
//            return Redirect('management_user');
//        }
//    }

    public function destroy($id) {
        $memberIns = mMember::find($id);
        mMember::destroy($id);
        $memberIns->access()->detach();

        return Redirect('member');
    }

}
