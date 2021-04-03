@extends('layouts/admin')

@section('title', 'Rekap Pengunjung')
@section('container')

<div class="col-md-10 p-5 pt-2 ml-auto">
        <!-- <H3>Selamat Datang, Admin!</H3> -->
        <h5>REKAP PENGUNJUNG</h5><hr>
        @if (session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
        @endif
        <h6>ANTRIAN BERAKHIR</h6>
          <a href="/reset" class="btn btn-info">Submit</a>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Tanggal</th>
            </tr>
          </thead>
          <tbody>
                    @foreach($histori as $b)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $b->jumlah_antrian }}</td>
                      <td>{{ $b->created_at }}</td>
                    </tr>  
                    @endforeach      
          </tbody>
        </table>
        
      </div>

@endsection