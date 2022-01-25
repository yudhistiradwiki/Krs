@extends('template')

@section('judul')
Input data dosen
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
        <h4 class="card-title">Tambah Data Dosen</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan benar.
        </p>
        <form class="forms-sample" action="/dosen/save" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="nidn">NIDN</label>
            <input type="text" class="form-control" id="nidn" value="{{ old('nidn') }}" name="nidn" placeholder="Nomor Induk Mahasiswa">
          </div>
          <div class="form-group">
            <label for="nama_dosen">Nama</label>
            <input type="text" class="form-control" id="nama_dosen" value="{{ old('nama_dosen') }}" name="nama_dosen" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" value="{{old('password') }}" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" value="{{ old('alamat') }}" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option>Silahkan Pilih Jenis Kelamin</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="telp">No. Telepon</label>
            <input type="text" class="form-control" id="telp" name="telp" value="{{ old('telp') }}" placeholder="Telepon">
          </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="photo">
              </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
