@extends('template')

@section('judul')
Edit data matkul
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
        <h4 class="card-title">Edit data matkul</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan benar.
        </p>
        @foreach ($dataMhs as $dataMhs)
        <form class="forms-sample" action="/matkul/updated/{{$dataMhs -> kode_matakuliah}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="kode_matakuliah">Kode Mata Kuliah</label>
              <input type="text" class="form-control" id="kode_matakuliah" value="{{ $dataMhs -> kode_matakuliah }}" name="kode_matakuliah" placeholder="Kode Mata Kuliah">
            </div>
            <div class="form-group">
              <label for="nama_matakuliah">Nama</label>
              <input type="text" class="form-control" id="nama_matakuliah" value="{{ $dataMhs -> nama_matakuliah }}" name="nama_matakuliah" placeholder="Nama Mata Kuliah">
            </div>
            <div class="form-group">
              <label for="sks">SKS</label>
              <input type="text" class="form-control" id="sks" value="{{ $dataMhs -> sks }}" name="sks" placeholder="SKS">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                  <select class="form-control" id="semester" name="semester">
                    <option>{{$dataMhs -> semester}}</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="nama_prodi">Nama Prodi</label>
                  <select class="form-control" id="nama_prodi" name="nama_prodi">
                    <option>{{$dataMhs -> nama_prodi}}</option>
                    <option>Teknik Mesin</option>
                    <option>Teknik Mekatron</option>
                    <option>Teknologi Listrik</option>
                    <option>TRPL</option>
                  </select>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  @endsection
