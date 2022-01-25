<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkulprodi extends Model
{
    use HasFactory;

    protected $table = "matakuliah";
    protected $primaryKey = "kode_matakuliah";

    public function tampil_data($table){
        return $this->db->get($table);
    }

    public function namaprodi(){
        return $this->hasOne('App\Models\namaprodi');
    }
}
