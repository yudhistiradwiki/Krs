@extends('template')

@section('judul')
KHS Mahasiswa
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
        <h4 class="card-title">KRS Mahasiswa</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan mahasiswa yang ingin mengambil KRS.
        </p>
        <form class="forms-sample" action="/krs/save" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" class="form-control" id="nim" value="{{ old('nim') }}" name="nim" placeholder="Nomor Induk Mahasiswa">
          </div>
          <div class="form-group">
            <label for="tahun_akad">Tahun Akademik</label>
            <select class="form-control" id="thn_akad" name="thn_akad">
                <option>Silahkan Pilih Tahun Akademik</option>
                <option>2018/2019 - Ganjil</option>
                <option>2018/2019 - Genap</option>
                <option>2019/2020 - Ganjil</option>
                <option>2019/2020 - Genap</option>
                <option>2020/2021 - Ganjil</option>
                <option>2020/2021 - Genap</option>
                <option>2021/2022 - Ganjil</option>
                <option>2021/2022 - Genap</option>
              </select>
            </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
