@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

    <div class="bg-text-pengunjung">
        <div class="card p-2">
        <h3 class="fw-bold">PELAYANAN TERPADU SATU PINTU (PTSP)</h3><hr>
        <div class="row card-content ml-auto">
          <div class="card m-2 bg-success" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title text-white">Admin 1</h5>
              <a href="/adminA1" class="btn btn-warning">Masuk <i class=" text-white fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <div class="card m-2 bg-success" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title text-white">Admin 2</h5>
              <a href="/adminA2" class="btn btn-warning">Masuk <i class="text-white fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- <div class="card m-2 bg-success" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title text-white">Admin 3</h5>
              <a href="/adminA3" class="btn btn-warning">Masuk <i class="text-white fas fa-angle-double-right"></i></a> 
            </div>
          </div> -->
        </div>
        </div>
          
    </div>

@endsection