<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaidbController extends Controller
{
    public function index()
    {
        //$pegawai = DB::table('pegawai')->get();
        $pegawai = DB::table('pegawai')->paginate(10);
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}

    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    public function edit($id)
{
    // Retrieve the record by ID
    $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
    return view('edit', ['pegawai' => $pegawai]);
}

public function update(Request $request, $id)
{
    // Update the record
    DB::table('pegawai')->where('pegawai_id', $id)->update([
        'pegawai_nama' => $request->nama,
        'pegawai_jabatan' => $request->jabatan,
        'pegawai_umur' => $request->umur,
        'pegawai_alamat' => $request->alamat
    ]);
    return redirect('/pegawai')->with('success', 'Data berhasil diupdate!');
}

public function delete($id)
{
    // Delete the record
    DB::table('pegawai')->where('pegawai_id', $id)->delete();
    return redirect('/pegawai')->with('success', 'Data berhasil dihapus!');
}
}
