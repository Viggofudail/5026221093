<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class latetsController extends Controller
{
    public function index()
    {
        $latihan = DB::table('latihan')->get();

        return view('latets', ['latihan' => $latihan]);
    }

    public function store(Request $request)
    {
        DB::table('latihan')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'NRP' => $request->NRP,
            'ALAMAT' => $request->ALAMAT
        ]);
        return redirect('/latets');
    }

    public function tambah()
    {
        return view('tambahlatihan');
    }
}


