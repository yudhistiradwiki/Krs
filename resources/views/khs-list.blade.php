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
                  <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                  <a href="/generate-pdf" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                  <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
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
                else if($nilai >= 0 && $nilai <= 69) {
                    $skor = 'E';}
                else $skor = 'Error!';
              echo $skor;
            }

            function Poin($nilai, $sks){
                if($nilai == 'A') $skor = 4 * $sks;
                else if($nilai == 'B') $skor = 3 * $sks;
                else if($nilai == 'C') $skor = 2 * $sks;
                else if($nilai == 'D') $skor = 1 * $sks;
                else $skor = 0;
              return $skor;}

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
              <td><?php Poin('A', $dataMahasiswa -> sks);?></td>
              <td><?php skorNilai($dataMahasiswa -> nilai);?></td>
              <?php
            $jumlahPoin = $jumlahPoin + Poin('A', $dataMahasiswa -> sks);
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
                <td>A</td>
            </tr>
          </tbody>
                </table>
        </div>
      </div>
    </div>
  </div>

  @endsection
