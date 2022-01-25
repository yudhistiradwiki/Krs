<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TahunAkadController extends Controller
{
    public function index()
    {
        $dataMhs = DB::table('tahun_akademik') -> paginate(5);
        return view('tahunakad-view', ['viewMhs' => $dataMhs]);
    }

    public function tambah()
    {
        return view('tahunakad-input');
    }
    public function simpan(Request $a)
    {
        DB::table('tahun_akademik') -> insert([
            'id_thn_akad' => $a -> id_thn_akad,
            'tahun_akademik' => $a -> tahun_akademik,
            'semester' => $a -> semester,
            'status' => $a -> status,
        ]);
        return redirect('/tahunakad') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function edit($id){
        $dataMhs = DB::table('tahun_akademik') -> where('id_thn_akad', $id) -> get();
        return view('tahunakad-edit', ['dataMhs' => $dataMhs]);
    }
    public function update($nim, Request $a)
    {
        DB::table('tahun_akademik') -> where('id_thn_akad', $a -> nim) -> update([
            'id_thn_akad' => $a -> id_thn_akad,
            'tahun_akademik' => $a -> tahun_akademik,
            'semester' => $a -> semester,
            'status' => $a -> status,
        ]);
        return redirect('/tahunakad') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function delete($nim)
    {
        $data = DB::table('tahun_akademik') -> where('id_thn_akad', $nim) -> first();
        DB::table('tahun_akademik')->where('id_thn_akad', $nim) -> delete();
        return redirect('/tahunakad');
    }
    public function cari(Request $x)
    {
        $cari = $x -> cari;
        $data = DB::table('tahun_akademik') -> where('tahun_akademik', 'like', "%" . $cari . "%") -> paginate();
        return view('tahunakad-view', ['viewMhs' => $data]);
    }
}
