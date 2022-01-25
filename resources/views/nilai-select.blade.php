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
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Nilai Mahasiswa</h4>
        <p class="card-description">
          Silahkan pilih mata kuliah yang akan dinilai.
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">

              <thead>
                  <th>Kode</th>
                  <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                  <form class="forms-sample" action="/krs/save" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
              @foreach ($datamk as $x)
                <tr>
                  <td><a href="/nilai/input/{{$x->kode_matakuliah}}/6">{{ $x->kode_matakuliah }}</a></td>
                  <td>{{ $x->nama_matakuliah }}</td>
                </tr>
                @endforeach
              </tbody>
            </table><br>

          </form>
          </div>
      </div>
    </div>
  </div>
@endsection
