@extends('template')

@section('judul')
KHS Mahasiswa
@endsection

@section('nama')
Yudhistira
@endsection

@section('navbar')
@parent

@endsection

@section('sidebar')
@parent
@endsection


@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kartu Hasil Studi Mahasiswa</h4>
        <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">NIM : {{Auth::guard('mahasiswa')->user()->nim}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Nama : {{Auth::guard('mahasiswa')->user()->nama_lengkap}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Semester : 5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">Prodi : {{Auth::guard('mahasiswa')->user()->nama_prodi}}</a>
                </li>
              </ul>
              <div>
                <div class="btn-wrapper">
                  <a href="/khs/print/{{Auth::guard('mahasiswa')->user()->nim}}/6" class="btn btn-primary text-white me-0"><i class="icon-printer"></i> Export to PDF</a>
                </div>
              </div>
            </div>
        </div><br>
      <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>SKS</th>
                <th>Nilai</th>
                <th>Poin</th>
                <th>Skor</th>
            </tr>
            </thead>
            <?php
            function skorNilai($nilai){
                if($nilai >= 90 && $nilai <=100){
                    $skor = 'A';}
                else if($nilai >= 80 && $nilai <= 89){
                     $skor = 'B';}
                else if($nilai >= 70 && $nilai <= 79) {
                    $skor = 'C';}
                else if($nilai >= 60 && $nilai <= 69){
                    $skor = 'D';}
                else if($nilai >= 0 && $nilai <= 59) {
                    $skor = 'E';}
                else $skor = 'Error!';
              return $skor;
            }

            function poinHuruf($nilai){
                if($nilai <= 4.0 && $nilai >= 3.6){
                    $skor = 'A';}
                else if($nilai <= 3.5 && $nilai >= 3.1){
                     $skor = 'AB';}
                else if($nilai <= 3.0 && $nilai >= 2.6) {
                    $skor = 'B';}
                else if($nilai <= 2.5 && $nilai >= 2.1){
                    $skor = 'BC';}
                else if($nilai <= 2.0 && $nilai >= 1.6) {
                    $skor = 'C';}
                else if($nilai <= 1.5 && $nilai >= 1.1) {
                    $skor = 'D';}
                else if($nilai <= 1.0 && $nilai >= 0) {
                    $skor = 'E';}
                else $skor = 'Error!';
              return $skor;
            }

            function PoinTes($nilai, $sks){
                if($nilai == 'A'){
                    $skor = 4 * $sks;}
                else if($nilai == 'B'){
                    $skor = 3 * $sks;}
                else if($nilai == 'C'){
                    $skor = 2 * $sks;}
                else if($nilai == 'D'){
                     $skor = 1 * $sks;}
                else $skor = 0;
              return $skor;
            }



            $no = 1;
            $jumlahSks = 0;
            $jumlahNilai = 0;
            $jumlahPoin = 0;
                ?>
            <tbody>
                @foreach ($join as $dataMahasiswa)
            <tr>
              <td width="20px"><?= $no++; ?></td>
              <td>{{$dataMahasiswa ->kode_matakuliah}}</td>
              <td>{{$dataMahasiswa ->nama_matakuliah}}</td>
              <td>{{$dataMahasiswa ->sks}}</td>
              <td>{{$dataMahasiswa ->nilai}}</td>
              <td><?php echo PoinTes(skorNilai($dataMahasiswa -> nilai),$dataMahasiswa->sks);?></td>
              <td><?php echo skorNilai($dataMahasiswa -> nilai);?></td>
              <?php
            $jumlahPoin = $jumlahPoin + PoinTes(skorNilai($dataMahasiswa -> nilai),$dataMahasiswa->sks);
            $jumlahSks += $dataMahasiswa->sks;
            $jumlahNilai += $dataMahasiswa -> nilai;
            ?>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">Jumlah</td>
                <td><?= $jumlahSks; ?></td>
                <td><?= $jumlahNilai; ?></td>
                <td><?= $jumlahPoin; ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5"><b>Index Prestasi</b></td>
                <td><?= $jumlahPoin / $jumlahSks; ?></td>
                <td><?php echo poinHuruf($jumlahPoin / $jumlahSks);?></td>
            </tr>
          </tbody>
                </table>
        </div>
      </div>
    </div>
  </div>

  @endsection
