@extends('template')

@section('judul')
Edit data Tahun Akademik
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
        <h4 class="card-title">Edit data Tahun Akademik</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan benar.
        </p>
        @foreach ($dataMhs as $dataMhs)
        <form class="forms-sample" action="/tahunakad/updated/{{$dataMhs -> id_thn_akad}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="id_thn_akad">id_thn_akad</label>
              <input type="text" class="form-control" id="id_thn_akad" value="{{ $dataMhs -> id_thn_akad }}" name="id_thn_akad" placeholder="ID">
            </div>
            <div class="form-group">
              <label for="tahun_akademik">Nama</label>
              <input type="text" class="form-control" id="tahun_akademik" value="{{ $dataMhs -> tahun_akademik }}" name="tahun_akademik" placeholder="Tahun Akademik">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                  <select class="form-control" id="semester" name="semester">
                    <option>{{ $dataMhs -> semester }}</option>
                    <option>Ganjil</option>
                    <option>Genap</option>
                  </select>
                </div>
              <div class="form-group">
                <label for="status">Status</label>
                  <select class="form-control" id="status" name="status">
                    <option>{{ $dataMhs -> status }}</option>
                    <option>Aktif</option>
                    <option>Tidak Aktif</option>
                  </select>
                </div><button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  @endsection
