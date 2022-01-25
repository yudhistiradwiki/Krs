@extends('template')

@section('judul')
Nilai Mahasiswa
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
                    <legend class="mt-3"><strong>NILAI AKHIR MAHASISWA</strong></legend>
                    <table>
                        @foreach ($mhs as $dataMhs)
                        <tr>
                        <td><strong>Kode Mata Kuliah</strong></td>
                        <td>&nbsp;: {{$dataMhs->kode_matakuliah}}</td>
                      </tr>
                      <tr>
                        <td><strong>Nama Mata Kuliah</strong></td>
                        <td>&nbsp;: {{$dataMhs->nama_matakuliah}}</td>
                      </tr>
                      <tr>
                        <td><strong>SKS</strong></td>
                        <td>&nbsp;: {{$dataMhs->sks}}</td>
                      </tr>
                      @endforeach
                      @foreach ($join as $data)
                        <?php
                      $semester = $data->semester == "Ganjil";
                      if($semester == "Ganjil"){
                        $tampilSemester = "Ganjil";
                      }
                      else{
                        $tampilSemester = "Genap";
                      }
                      ?>
                      @endforeach
                      <tr>
                        <td><strong>Tahun Akademik (Semester)</strong></td>
                        <td>&nbsp;: <?=$tampilSemester;?></td>
                      </tr>
                    </table>
                  </center>
            </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            $jumlahSks = 0;
            ?>
            <tbody>
                @foreach ($data as $dataKrs)
            <tr>
              <td width="20px"><?= $no++; ?></td>
              <td>{{$dataKrs ->nim}}</td>
              <td>{{$dataKrs ->nama_lengkap}}</td>
              <td><input type="text" name="nilai[]" value="{{$dataKrs->nilai}}"></td>
              <?php
              $sks = $dataKrs -> sks;
              $jumlahSks = $jumlahSks + $sks;
              ?>
            </tr>
            @endforeach
            </tbody>
                </table>
                <br>
                <button>Simpan</button>
        </div>
      </div>
    </div>
  </div>

  @endsection
