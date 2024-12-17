<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class easController extends Controller
{
    public function index()
    {
        $karyawan1 = DB::table('karyawan1')->get();

        return view('easindex', ['karyawan1' => $karyawan1]);
    }

    public function store(Request $request)
    {
        DB::table('latihan')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/index');
    }

    public function edit($NIP)
    {

        $karyawan1 = DB::table('karyawan1')->where('NIP', $NIP)->first();
        return view('updateeas', ['karyawan1' => $karyawan1]);
    }

    public function update(Request $request, $id)
    {

        DB::table('karyawan')->where('NIP', $NIP)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->Gaji,
        ]);
        return redirect('/index');
    }

    public function view($NIP)
{
    $karyawan1 = DB::table('karyawan1')->where('NIP', $NIP)->first();


    return view('easview', ['karyawan1' => $karyawan1]);
}


}
