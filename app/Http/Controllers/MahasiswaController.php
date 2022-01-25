<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $dataMhs = DB::table('mahasiswa') -> paginate(7);
        return view('mahasiswa-view', ['viewMhs' => $dataMhs]);
    }

    public function tambah()
    {
        return view('mahasiswa-input');
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
        DB::table('mahasiswa') -> insert([
            'nim' => $a -> nim,
            'nama_lengkap' => $a -> nama_lengkap,
            'password' => Hash::make($a -> password),
            'alamat' => $a -> alamat,
            'email' => $a -> email,
            'telepon' => $a -> telepon,
            'tempat_lahir' => $a -> tempat_lahir,
            'tanggal_lahir' => $a -> tanggal_lahir,
            'jenis_kelamin' => $a -> jenis_kelamin,
            'nama_prodi' => $a -> nama_prodi,
            'photo' => $pathPublic
        ]);
       toast('Data mahasiswa berhasil ditambahkan!','success');
        return redirect('/mahasiswa') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function edit($id){
        $dataMhs = DB::table('mahasiswa') -> where('nim', $id) -> get();
        return view('mahasiswa-edit', ['dataMhs' => $dataMhs]);
    }
    public function update($nim, Request $a)
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
        DB::table('mahasiswa') -> where('nim', $a -> nim) -> update([
            'nama_lengkap' => $a -> nama_lengkap,
            'alamat' => $a -> alamat,
            'email' => $a -> email,
            'password' => Hash::make($a -> password),
            'telepon' => $a -> telepon,
            'tempat_lahir' => $a -> tempat_lahir,
            'tanggal_lahir' => $a -> tanggal_lahir,
            'jenis_kelamin' => $a -> jenis_kelamin,
            'nama_prodi' => $a -> nama_prodi,
            'photo' => $pathPublic
        ]);
        toast('Data mahasiswa berhasil diperbarui!','success');
        return redirect('/mahasiswa') -> with('berhasil', 'Data berhasil disimpan!');
    }
    public function delete($nim)
    {
        $data = DB::table('mahasiswa') -> where('nim', $nim) -> first();
        File::delete($data->photo);
        DB::table('mahasiswa')->where('nim', $nim) -> delete();
        toast('Data mahasiswa berhasil dihapus!','success');
        return redirect('/mahasiswa');
    }

    public function detail($id){
        $dataMhs = DB::table('mahasiswa') -> where('nim', $id) -> get();
        return view('mahasiswa-detail', ['dataMhs' => $dataMhs]);
    }

    public function cari(Request $x)
    {
        $cari = $x -> cari;
        $data = DB::table('mahasiswa') -> where('nama_lengkap', 'like', "%" . $cari . "%") -> paginate();
        return view('mahasiswa-view', ['viewMhs' => $data]);
    }
}
