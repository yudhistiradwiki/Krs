<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MatkulController extends Controller
{
    public function index()
    {
        $dataMhs = DB::table('matakuliah') -> paginate(5);
        return view('matkul-view', ['viewMhs' => $dataMhs]);
    }

    public function tambah()
    {
        $dataProdi = DB::table('prodi');
        return view('matkul-input', ['dataProdi' => $dataProdi]);
    }

    public function simpan(Request $a)
    {
        DB::table('matakuliah') -> insert([
            'kode_matakuliah' => $a -> kode_matakuliah,
            'nama_matakuliah' => $a -> nama_matakuliah,
            'sks' => $a -> sks,
            'semester' => $a -> semester,
            'nama_prodi' => $a -> nama_prodi
        ]);
        return redirect('/matkul') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function edit($id){
        $dataMhs = DB::table('matakuliah') -> where('kode_matakuliah', $id) -> get();
        return view('matkul-edit', ['dataMhs' => $dataMhs]);
    }
    public function update($kode_matakuliah, Request $a)
    {
        DB::table('matakuliah') -> where('kode_matakuliah', $a -> kode_matakuliah) -> update([
            'nama_matakuliah' => $a -> nama_matakuliah,
            'sks' => $a -> sks,
            'semester' => $a -> semester,
            'nama_prodi' => $a -> nama_prodi
        ]);
        return redirect('/matkul') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function delete($kode_matakuliah)
    {
        $data = DB::table('matakuliah') -> where('kode_matakuliah', $kode_matakuliah) -> first();
        DB::table('matakuliah')->where('kode_matakuliah', $kode_matakuliah) -> delete();
        return redirect('/matkul');
    }
    public function cari(Request $x)
    {
        $cari = $x -> cari;
        $data = DB::table('matakuliah') -> where('nama_matakuliah', 'like', "%" . $cari . "%") -> paginate();
        return view('matkul-view', ['viewMhs' => $data]);
    }
}
