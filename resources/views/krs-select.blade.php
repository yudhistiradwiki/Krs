@extends('template')

@section('judul')
KRS Mahasiswa
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
        <h4 class="card-title">Kartu Rencana Studi Mahasiswa</h4>
        <p class="card-description">
          Silahkan ambil data KRS dengan klik <a href="/krs/view">disini.</a>
        </p>
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
                  <th>No</th>
                  <th>Kode</th>
                  <th>Mata Kuliah</th>
                  <th>SKS</th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 0;
              $jumlahSks = 0;
              ?>
              @foreach ($join as $y)
              <?ph
              $no++;
              $sks = $y -> sks;
                  $jumlahSks = $jumlahSks + $sks;
                  ?>
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $y -> kode_matakuliah }}</td>
                  <td>{{ $y -> nama_matakuliah }}</td>
                  <td>{{ $y -> sks}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
                    <td colspan="3"><strong><?= $jumlahSks; ?></strong></td>
                  </tr>
              </tbody>
            </table><br>
        </div>
  </div>
    </div>
</div>
@endsection
