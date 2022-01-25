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
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit data Mahasiswa</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan benar.
        </p>
        @foreach ($dataMhs as $dataMhs)
        <form class="forms-sample" action="/mahasiswa/updated/{{$dataMhs -> nim}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nim">Nim</label>
              <input type="text" class="form-control" id="nim" value="{{ $dataMhs -> nim }}" name="nim" placeholder="Nomor Induk Mahasiswa">
            </div>
            <div class="form-group">
              <label for="nama_lengkap">Nama</label>
              <input type="text" class="form-control" id="nama_lengkap" value="{{ $dataMhs -> nama_lengkap }}" name="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" value="{{ $dataMhs -> password }}" name="password" placeholder="Password">
              </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" value="{{ $dataMhs -> alamat }}" name="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ $dataMhs -> email }}" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="telepon">No. Telepon</label>
              <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $dataMhs -> telepon }}" placeholder="Telepon">
            </div>
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $dataMhs -> tempat_lahir }}" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $dataMhs -> tanggal_lahir }}" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                  <option>{{$dataMhs -> jenis_kelamin}}</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            <div class="form-group">
              <label for="nama_prodi">Program Studi</label>
                <select class="form-control" id="nama_prodi" name="nama_prodi">
                  <option>{{$dataMhs -> nama_prodi}}</option>
                  <option>Teknik Mesin</option>
                  <option>Teknik Mekatronika</option>
                  <option>Teknologi Listrik</option>
                  <option>TRPL</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="photo">Photo</label>
                  <input type="file" class="form-control" id="photo" name="photo" placeholder="photo">
                  <input type="hidden" name="pathfoto" value="{{ $dataMhs -> photo}}"><br/>
                  <img src="{{ url('/' . $dataMhs -> photo) }}" width="100px" height="auto">
                </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  @endsection
