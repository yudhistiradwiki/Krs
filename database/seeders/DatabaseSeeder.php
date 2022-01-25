<?php

namespace Database\Seeders;

use App\Models\LoginMhs;
use App\Models\LoginDsn;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       /* User::create([
            'username' => 'yudhistiradwiki',
            'id_session' => '',
            'level' => 'user',
            'blokir' => 'N',
            'name' => 'Muhammad Dwiki Yudhistira',
            'email' => 'dadas@gmail.com',
            'photo' => '',
            'password' => Hash::make('1')
        ]);*/
        /*LoginMhs::create([
            'nim' => '201904008',
            'email' => '',
            'alamat' => 'jalanss',
            'nama_lengkap' => 'Muhammad Dwiki Yudhistira',
            'email' => 'tes1@gmail.com',
            'telepon' => '000',
            'tempat_lahir' => 'pwk',
            'tanggal_lahir' => '2000-05-10',
            'jenis_kelamin' => '',
            'nama_prodi' => '',
            'photo' => '',
            'password' => Hash::make('2')
        ]);*/
        LoginDsn::create([
            'nidn' => '201904008',
            'nama_dosen' => 'ss',
            'alamat' => 'jalanss',
            'email' => 'dosen1@gmail.com',
            'telp' => '000',
            'jenis_kelamin' => '',
            'photo' => '',
            'password' => Hash::make('1')
        ]);
    }
}
