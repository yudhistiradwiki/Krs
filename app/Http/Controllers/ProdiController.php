<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProdiController extends Controller
{
    public function index()
    {
        $dataMhs = DB::table('prodi') -> paginate(5);
        return view('prodi-view', ['viewMhs' => $dataMhs]);
    }

    public function tambah()
    {
        return view('prodi-input');
    }
    public function simpan(Request $a)
    {
        DB::table('prodi') -> insert([
            'id_prodi' => $a -> id_prodi,
            'kode_prodi' => $a -> kode_prodi,
            'nama_prodi' => $a -> nama_prodi,
        ]);
        return redirect('/prodi') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function edit($id){
        $dataMhs = DB::table('prodi') -> where('id_prodi', $id) -> get();
        return view('prodi-edit', ['dataMhs' => $dataMhs]);
    }
    public function update($nim, Request $a)
    {
        DB::table('prodi') -> where('id_prodi', $a -> nim) -> update([
            'id_prodi' => $a -> id_prodi,
            'kode_prodi' => $a -> kode_prodi,
            'nama_prodi' => $a -> nama_prodi,
        ]);
        return redirect('/prodi') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function delete($nim)
    {
        $data = DB::table('prodi') -> where('id_prodi', $nim) -> first();
        DB::table('prodi')->where('id_prodi', $nim) -> delete();
        return redirect('/prodi');
    }
    public function cari(Request $x)
    {
        $cari = $x -> cari;
        $data = DB::table('prodi') -> where('nama_prodi', 'like', "%" . $cari . "%") -> paginate();
        return view('prodi-view', ['viewMhs' => $data]);
    }
}
