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
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <div>
                <center class="mb-3">
                    <legend class="mt-3"><strong>KARTU RENCANA STUDI</strong></legend>
                    <table>
                        @foreach ($dataMahasiswa as $dataMahasiswa)
                        <tr>
                        <td><strong>NIM</strong></td>
                        <td>&nbsp;: {{$dataMahasiswa -> nim}}</td>
                      </tr>
                      <tr>
                        <td><strong>Nama Lengkap</strong></td>
                        <td>&nbsp;: {{$dataMahasiswa -> nama_lengkap}}</td>
                      </tr>
                      <tr>
                        <td><strong>Program Studi</strong></td>
                        <td>&nbsp;: {{$dataMahasiswa -> nama_prodi}}</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td><strong>Tahun Akademik (Semester)</strong></td>
                        <td>&nbsp;: @foreach ($dataMhsa as $dataMhsa)
                            {{$dataMhsa -> id_thn_akad}}
                            @endforeach
                        </td>
                      </tr>

                    </table>
                  </center>
            </div>

            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <a href="/dosen/insert/">
                        <button class="btn btn-primary btn-md text-white mb-0 me-0" type="button"><i class="mdi mdi-plus"></i></button>
                    </a><br> <br>
                  </div>
          </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>SKS</th>
                <th colspan="2">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            $jumlahSks = 0;
            $sks = 5;
            ?>
            @foreach ($dataKrs as $dataKrs)
            <tbody>
            <tr>
              <td width="20px"><?= $no++; ?></td>
              <td>{{$dataKrs -> kode_matakuliah}}</td>
              <td>nama_matakuliah</td>
              <td><?=$sks;?></td>
              <td>
                  <a href="/mahasiswa/update/">
                      <button type="button" class="btn btn-inverse-success btn-icon">
                      <i class="ti-pencil-alt"></i>
                      </button>
                  </a> &nbsp;
                  <a href="/mahasiswa/delete/">
                      <button type="button" class="btn btn-inverse-danger btn-icon">
                      <i class="ti-trash"></i></button>
                  </a>
              </td>
              <?php
              $jumlahSks = $jumlahSks + $sks;
              ?>
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
