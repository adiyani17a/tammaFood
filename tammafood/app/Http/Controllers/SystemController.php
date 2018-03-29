<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SystemController extends Controller
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
    public function user()
    {
        return view('/system/hakuser/user');
    }

    public function akses()
    {
        return view('/system/hakakses/akses');
    }

    public function profil()
    {
        return view('/system/profilperusahaan/profil');
    }

    public function finansial()
    {
        return view('/system/thnfinansial/finansial');
    }
    public function tambah_user()
    {
        return view('/system/hakuser/tambah_user');
    }
    public function tambah_akses()
    {
        return view('/system/hakakses/tambah_akses');
    }
}
