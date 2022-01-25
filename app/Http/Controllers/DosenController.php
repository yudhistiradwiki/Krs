<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    public function index()
    {
        $dataMhs = DB::table('dosen') -> paginate(5);
        return view('dosen-view', ['viewMhs' => $dataMhs]);
    }

    public function tambah()
    {
        return view('dosen-input');
    }

    public function simpan(Request $a)
    {
        $file = $a -> file('photo');
        $nama_file = time() . "-" . $file->getClientOriginalName();
        $ekstensi = $file -> getClientOriginalExtension();
        $ukuran = $file -> getSize();
        $pathAsli = $file -> getRealPath();
        $namaFolder = 'photo';
        $file-> move($namaFolder, $nama_file);
        $pathPublic = $namaFolder . "/" . $nama_file;
        DB::table('dosen') -> insert([
            'nidn' => $a -> nidn,
            'nama_dosen' => $a -> nama_dosen,
            'alamat' => $a -> alamat,
            'jenis_kelamin' => $a -> jenis_kelamin,
            'email' => $a -> email,
            'telp' => $a -> telp,
            'photo' => $pathPublic,
            'password' => Hash::make($a -> password),
        ]);
        return redirect('/dosen') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function edit($id){
        $dataMhs = DB::table('dosen') -> where('nidn', $id) -> get();
        return view('dosen-edit', ['dataMhs' => $dataMhs]);
    }
    public function update($nidn, Request $a)
    {
        $file = $a -> file('photo');
        if (file_exists($file)){
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $namaFolder = 'photo';
            $file->move($namaFolder, $nama_file);
            $pathPublic = $namaFolder . "/" . $nama_file;
        }
        else{
            $pathPublic = $a -> pathfoto;
        }
        DB::table('dosen') -> where('nidn', $a -> nidn) -> update([
            'nama_dosen' => $a -> nama_dosen,
            'alamat' => $a -> alamat,
            'jenis_kelamin' => $a -> jenis_kelamin,
            'email' => $a -> email,
            'telp' => $a -> telp,
            'photo' => $pathPublic,
            'password' => Hash::make($a -> password),
        ]);
        return redirect('/dosen') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function delete($nidn)
    {
        $data = DB::table('dosen') -> where('nidn', $nidn) -> first();
        File::delete($data->photo);
        DB::table('dosen')->where('nidn', $nidn) -> delete();
        return redirect('/dosen');
    }

    public function detail($id){
        $dataMhs = DB::table('dosen') -> where('nidn', $id) -> get();
        return view('dosen-detail', ['dataMhs' => $dataMhs]);
    }

    public function cari(Request $x)
    {
        $cari = $x -> cari;
        $data = DB::table('dosen') -> where('nama_dosen', 'like', "%" . $cari . "%") -> paginate();
        return view('dosen-view', ['viewMhs' => $data]);
    }
}
