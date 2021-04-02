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
            <h3 class="display-4 font-weight-bold" >001</h3>
          </div>
          <div class="card-footer">
            <input class="btn btn-submit mr-3" type="submit" name="submit" value="Print">
          </div>
        </div>
      </div>


@endsection