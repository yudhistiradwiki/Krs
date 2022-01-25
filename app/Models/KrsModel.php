<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KrsModel extends Model
{
    public function allData($id,$thn)
    {
        return DB::table('krs')
                ->Join('matakuliah', 'matakuliah.kode_matakuliah', '=', 'krs.kode_matakuliah')
                ->Join('mahasiswa', 'mahasiswa.nim', '=', 'krs.nim')
                ->where('krs.nim', $id)
                ->Join('tahun_akademik', 'tahun_akademik.id_thn_akad', '=', 'krs.id_thn_akad')
                ->where('krs.id_thn_akad', $thn)
                ->get();
    }
}
