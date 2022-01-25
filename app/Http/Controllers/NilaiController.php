<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\NilaiModel;
use App\Models\MahasiswaModel;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->NilaiModel = new NilaiModel();
    }

    public function search2($id, $thn){
        $dataMhs = DB::table('krs') -> where('nim', $id) -> where('id_thn_akad', $thn) -> get();
        $dataMhswa = DB::table('mahasiswa') -> where('nim', $id) -> get();
        $dataKrs = DB::table('krs') -> where('nim', $id) -> where('id_thn_akad', $thn) -> get();
        return view('krs-list', ['dataMhsa' => $dataMhs, 'dataMahasiswa' => $dataMhswa, 'dataKrs' => $dataKrs]);
    }

    public function coba($id,$thn){
        $dataMhswa = DB::table('matakuliah') -> where('kode_matakuliah', $id) -> get();
        $data = ['join' =>$this->KrsModel->allData($id,$thn), 'mhs' => $dataMhswa];
        return view('nilai-list', $data);
    }

    public function selectmk($id){
        $datamk = DB::table('matakuliah') -> where('nidn', $id) ->  get();
        return view('nilai-select', ['datamk' => $datamk]);
    }

    public function inputnilai($kode_matakuliah,$id_thn_akad){
        $dataKrs = DB::table('krs') -> where('kode_matakuliah', $kode_matakuliah) -> where('id_thn_akad', $id_thn_akad) -> get();
        $data = ['join' =>$this->NilaiModel->allData($kode_matakuliah,$id_thn_akad),'mhs' => $dataKrs];
        return view('nilai-list', $data);
    }

    public function simpan(Request $a)
    {
        $kode_mks = $a->kode_mks;
        if(!empty($a->input('isinilai'))){
            $will_nilai = [];
            $will_id = [];
            foreach ($a->input('isinilai') as $key => $value){
                array_push($will_nilai, $value);
            }
            foreach ($a->input('id_krs') as $key => $value){
                array_push($will_id, [$value]);
            }
            $a = count($will_id);
            for ($x = 0; $x < $a; $x++){
                DB::table('krs') -> where('id_krs', $will_id[$x]) -> update([
                    'nilai' => $will_nilai[$x],
                ]);
            }
        }
        return redirect('/nilai/input'.'/'.$kode_mks.'/6') -> with('berhasil', 'Data berhasil disimpan!');
    }
}
