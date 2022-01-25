@extends('template')

@section('judul')
Edit data dosen
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
        <h4 class="card-title">Edit data Dosen</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan benar.
        </p>
        @foreach ($dataMhs as $dataMhs)
        <form class="forms-sample" action="/dosen/updated/{{$dataMhs -> nidn}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nidn">NIDN</label>
              <input type="text" class="form-control" id="nidn" value="{{ $dataMhs -> nidn }}" name="nidn" placeholder="Nomor Induk Dosen Nasional">
            </div>
            <div class="form-group">
              <label for="nama_dosen">Nama</label>
              <input type="text" class="form-control" id="nama_dosen" value="{{ $dataMhs -> nama_dosen }}" name="nama_dosen" placeholder="Nama Lengkap">
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
                <label for="jenis_kelamin">Jenis Kelamin</label>
                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option>{{$dataMhs -> jenis_kelamin}}</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ $dataMhs -> email }}" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="telp">No. Telepon</label>
              <input type="text" class="form-control" id="telp" name="telp" value="{{ $dataMhs -> telp }}" placeholder="No Telepon">
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
