@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

    <div class="bg-text-pengunjung">
        <div class="card text-center">
          <div class="card-header">
            <h2>ADMIN 1</h2>
          </div>
          <div class="card-body">
            <h3>Jumlah Antrian: 10</h3>
            <h3>Nomor Antrian:</h3>
            <h3 class="display-4 font-weight-bold" >001</h3>
          </div>
          <div class="card-footer">
            <input class="btn btn-success mr-3" type="submit" name="submit" value="Panggil Antrian">
            <input class="btn btn-danger mr-3" type="submit" name="submit" value="Antrian Berikutnya">
          </div>
        </div>
    </div>

@endsection