@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

    <div class="bg-text-pengunjung">
        <div class="card p-2">
        <h3 class="fw-bold">PELAYANAN TERPADU SATU PINTU (PTSP)</h3><hr>
        <div class="row card-content">
          <div class="card m-2 bg-success" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title text-white">Print Antrian</h5>
              <a href="{{ asset('pengunjung1') }}" class="btn btn-warning">Pilih <i class=" text-white fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <div class="card m-2 bg-success" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title text-white">View Pengunjung</h5>
              <a href="{{ asset('viewpengunjung') }}" class="btn btn-warning">Pilih <i class="text-white fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <div class="card m-2 bg-success" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title text-white">Petugas</h5>
              <a href="{{ asset('login') }}" class="btn btn-warning">Pilih <i class="text-white fas fa-angle-double-right"></i></a> 
            </div>
          </div>
        </div>
        </div>
          
    </div>

@endsection