<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HrdController extends Controller
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
    public function rekrut()
    {
        return view('hrd/recruitment/rekrut');

    }

    public function kpi()
    {
        return view('hrd/manajemenkpipegawai/kpi');

    }

    public function payroll()
    {
        return view('hrd/payroll/payroll');

    }
    public function karyawan()
    {
        return view('hrd/datakaryawan/karyawan');

    }
    public function admin()
    {
        return view('hrd/dataadministrasi/admin');

    }
    public function lembur()
    {
        return view('hrd/datalembur/lembur');

    }
    public function score()
    {
        return view('hrd/scoreboard/score');

    }
    public function training()
    {
        return view('hrd/training/training');

    }
}
