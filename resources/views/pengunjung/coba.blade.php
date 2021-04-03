@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

<div class="bg-text-pengunjung">
        <div class="card text-center">
          <div class="card-header">
            <h2>SELAMAT DATANG DI
            <br>PELAYANAN TERPADU SATU PINTU (PTSP)
            </h2>
          </div>
          <div class="card-body">
            <h3>Nomor Antrian Anda:</h3>
            <h3 class="display-4 font-weight-bold" >{{ $nomor }}</h3>
          </div>
          <div class="card-footer">
            <form action="/antrian" method="post" class="d-inline">
              @csrf
              <button type="submit"class="btn btn-submit mr-3">Print</button>
            </form>
            <!-- <input class="btn btn-submit mr-3" type="submit" name="submit" value="Print"> -->
          </div>
        </div>
      </div>


@endsection