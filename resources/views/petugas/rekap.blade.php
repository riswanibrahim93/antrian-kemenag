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
        <!-- <h6 class="text-right">ANTRIAN BERAKHIR</h6> -->
        <div class="row">
        <div class="col-md-8">
        </div>
        <div align="right" class="col-md-4">
        <a href="/reset" class="btn btn-danger mb-2 btn-sm">Antrian Berakhir</a>
        <p class="small text-secondary  ">*)Apabila antrian berakhir, klik tombol "Antrian Berakhir" untuk meresest dan menyimpan riwayat antrian </p>
        </div>
        </div>
          
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