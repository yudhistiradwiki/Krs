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

        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>id</th>
                <th>Kode MK</th>
                <th>Nama MK</th>
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
                <form class="forms-sample" action="/nilai/save" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                @foreach ($join as $data)
            <tr>
              <td width="20px"><?= $no++; ?></td>
              <td>{{$data->id_krs}}</td>
              <td>{{$data->kode_matakuliah}}</td>
              <td>{{$data->nama_matakuliah}}</td>
              <td>{{$data->nim}}</td>
              <td>{{$data->nama_lengkap}}</td>
              <input type="hidden" name="id_krs[]" value="{{$data->id_krs}}">
              <input type="hidden" name="kode_mks" value="{{$data->kode_matakuliah}}">
              <td><input type="text" class="form-control" name="isinilai[]" value="{{$data->nilai}}"></td>
            </tr>
            @endforeach
            </tbody>
                </table>
                <br>
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  @endsection
