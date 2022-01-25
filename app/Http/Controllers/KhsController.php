<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\KhsModel;
use App\Models\MahasiswaModel;

class KhsController extends Controller
{
    public function __construct()
    {
        $this->KrsModel = new KhsModel();
    }

    public function search2($id, $thn){
        $dataMhs = DB::table('krs') -> where('nim', $id) -> where('id_thn_akad', $thn) -> get();
        $dataMhswa = DB::table('mahasiswa') -> where('nim', $id) -> get();
        $dataKrs = DB::table('krs') -> where('nim', $id) -> where('id_thn_akad', $thn) -> get();
        return view('krs-list', ['dataMhsa' => $dataMhs, 'dataMahasiswa' => $dataMhswa, 'dataKrs' => $dataKrs]);
    }

    public function coba($id,$thn){
        $dataMhswa = DB::table('mahasiswa') -> where('nim', $id) -> get();
        $data = ['join' =>$this->KrsModel->allData($id,$thn), 'mhs' => $dataMhswa];
        return view('khs-list', $data);
    }

}
