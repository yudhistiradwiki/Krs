@extends('template')

@section('judul')
Edit data mahasiswa
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
        @foreach ($dataMhs as $dataMhs)
        <h4 class="card-title">Detail Mahasiswa</h4>
        <p class="card-description">
            <img src="{{ url('/' . $dataMhs -> photo) }}" width="200px" height="auto">
        </p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>NIM</th>
                <td>{{$dataMhs -> nim}}</td>
              </tr>
              <tr>
                <th>Nama Lengkap</th>
                <td>{{$dataMhs -> nama_lengkap}}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>{{$dataMhs -> alamat}}</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>{{$dataMhs -> email}}</td>
              </tr>
              <tr>
                <th>Telepon</th>
                <td>{{$dataMhs -> telepon}}</td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <td>{{$dataMhs -> tempat_lahir}}</td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td>{{$dataMhs -> tanggal_lahir}}</td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td>{{$dataMhs -> jenis_kelamin}}</td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
@endforeach
  @endsection
