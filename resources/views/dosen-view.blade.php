@extends('template')

@section('judul')
Data Dosen
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
        <div class="d-sm-flex justify-content-between align-items-start">
            <div>
              <h4 class="card-title card-title-dash">Data Dosen</h4>
             <p class="card-subtitle card-subtitle-dash">
                <form action="/dosen/cari" method="GET">
                 <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="cari" class="form-control" placeholder="Pencarian Nama" aria-label="Recipient's username"> &nbsp; &nbsp;
                      <div class="input-group-append">
                      <button type="submit" class="btn btn-sm btn-outline-secondary btn-rounded btn-icon">
                        <i class="ti-search text-dark"></i>
                      </button>
                      </div>
                    </div>
                  </div>
             </p>
            </div>
            <div>
                <a href="/dosen/insert/">
                    <button class="btn btn-primary btn-md text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i> Tambah Data</button>
                </a>
            </div>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>NIDN</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($viewMhs as $x)
              <tr>
                <td>{{ $x -> nidn }}</td>
                <td>{{ $x -> nama_dosen }}</td>
                <td>{{ $x -> alamat }}</td>
                <td>{{ $x -> email }}</td>
                <td>
                    <a href="/dosen/detail/{{ $x -> nidn }}">
                        <button type="button" class="btn btn-inverse-info btn-icon">
                        <i class="ti-eye"></i>
                      </button>
                    </a> &nbsp;
                    <a href="/dosen/update/{{ $x -> nidn }}">
                        <button type="button" class="btn btn-inverse-success btn-icon">
                        <i class="ti-pencil-alt"></i>
                        </button>
                    </a> &nbsp;
                    <a href="/dosen/delete/{{ $x -> nidn }}">
                        <button type="button" class="btn btn-inverse-danger btn-icon">
                        <i class="ti-trash"></i></button>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table><br>
          {{$viewMhs -> links()}}
        </div>
      </div>
    </div>
  </div>
@endsection
