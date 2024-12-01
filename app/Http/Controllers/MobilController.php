<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {

        $mobil = DB::table('mobil')->paginate(10);
        return view('indextugas', ['mobil' => $mobil]);
    }

    public function tambah()
    {
        return view('tambahtugas');
    }

    public function store(Request $request)
    {

        DB::table('mobil')->insert([
            'merkmobil' => $request->merkmobil,
            'stockmobil' => $request->stockmobil,
            'tersedia' => $request->tersedia ? 'Y' : 'N',
        ]);
        return redirect('/mobil');
    }

    public function edit($id)
    {

        $mobil = DB::table('mobil')->where('kodemobil', $id)->first();
        return view('viewtugas', ['mobil' => $mobil]);
    }

    public function update(Request $request, $id)
    {

        DB::table('mobil')->where('kodemobil', $id)->update([
            'merkmobil' => $request->merkmobil,
            'stockmobil' => $request->stockmobil,
            'tersedia' => $request->tersedia ? 'Y' : 'N',
        ]);
        return redirect('/mobil');
    }

    public function delete($id)
    {

        DB::table('mobil')->where('kodemobil', $id)->delete();
        return redirect('/mobil');
    }

    public function cari(Request $request)
    {

        $cari = $request->cari;
        $mobil = DB::table('mobil')
                    ->where('merkmobil', 'like', '%' . $cari . '%')
                    ->paginate(10);
        return view('indextugas', ['mobil' => $mobil]);
    }
}
