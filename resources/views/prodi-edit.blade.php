@extends('template')

@section('judul')
Edit data prodi
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
        <h4 class="card-title">Edit data Prodi</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan benar.
        </p>
        @foreach ($dataMhs as $dataMhs)
        <form class="forms-sample" action="/prodi/updated/{{$dataMhs -> id_prodi}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="id_prodi">ID Prodi</label>
              <input type="text" class="form-control" id="id_prodi" value="{{ $dataMhs -> id_prodi }}" name="id_prodi" placeholder="ID Prodi">
            </div>
            <div class="form-group">
              <label for="kode_prodi">Kode Prodi</label>
              <input type="text" class="form-control" id="kode_prodi" value="{{ $dataMhs -> kode_prodi }}" name="kode_prodi" placeholder="Kode Prodi">
            </div>
            <div class="form-group">
              <label for="nama_prodi">nama_prodi</label>
              <input type="text" class="form-control" id="nama_prodi" value="{{ $dataMhs -> nama_prodi }}" name="nama_prodi" placeholder="Nama Prodi">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  @endsection
