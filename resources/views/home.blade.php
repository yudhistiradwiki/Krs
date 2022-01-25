@extends('template')

@section('judul')
Dashboard
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
<div class="row">
    <div class="col-lg-8 d-flex flex-column">
      <div class="row flex-grow">
        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                 <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                 <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                </div>
                <div id="performance-line-legend"></div>
              </div>
              <div class="chartjs-wrapper mt-5">
                <canvas id="performaneLine"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 d-flex flex-column">
      <div class="row flex-grow">
        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
          <div class="card bg-primary card-rounded">
            <div class="card-body pb-0">
              <h4 class="card-title card-title-dash text-white mb-4">Status User</h4>
              <div class="row">
                <ul class="bullet-line-list">
                    <li>
                      <div class="d-flex justify-content-between">
                        <div><span class="text-light">Name :</span></div>
                        @if(Str::length(Auth::guard('user')->user())>0)
                        <p><span class="text-light">{{Auth::guard('user')->user()->name}}</span></p>
                        @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
                        <p><span class="text-light">{{Auth::guard('mahasiswa')->user()->nama_lengkap}}</span></p>
                        @endif
                      </div>
                    </li>
                    <li>
                      <div class="d-flex justify-content-between">
                        <div><span class="text-light">Role :</span></div>
                        @if(Str::length(Auth::guard('user')->user())>0)
                        <p><span class="text-light">Administrator</span></p>
                        @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
                        <p><span class="text-light">Mahasiswa</span></p>
                        @endif
                      </div>
                    </li>

                  </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                    <div class="circle-progress-width">
                      <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                    </div>
                    <div>
                      <p class="text-small mb-2">Total Visitors</p>
                      <h4 class="mb-0 fw-bold">26.80%</h4>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="circle-progress-width">
                      <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                    </div>
                    <div>
                      <p class="text-small mb-2">Visits per day</p>
                      <h4 class="mb-0 fw-bold">9065</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="row flex-grow">
    <div class="col-md-12 col-lg-12 grid-margin stretch-card">
      <div class="card card-rounded">
        <div class="card-body card-rounded">
          <h4 class="card-title  card-title-dash">Tanggal-tanggal Penting</h4>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Pengisian KRS Mahasiswa (konsultasi dengan dosen PA)
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">2021-09-06~2021-09-10</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Ujian Akhir Semester (UAS)
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">	2022-01-31~2022-02-04</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Akhir masa Kuliah
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">2022-02-11</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Penerbitan KHS (Nilai)
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">2022-02-14</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
              <div class="wrapper w-100">
                <p class="mb-2 font-weight-medium">
                  Batas akhir Perbaikan Nilai
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="mdi mdi-calendar text-muted me-1"></i>
                    <p class="mb-0 text-small text-muted">2022-02-07</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection
