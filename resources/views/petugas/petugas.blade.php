@extends('layouts/admin')

@section('title', 'Daftar Petugas')
@section('container')

<div class="col-md-10 p-5 pt-2 ml-auto">
        <!-- <H3>Selamat Datang, Admin!</H3> -->
        <h5>DAFTAR PETUGAS</h5><hr>
        <a href="{{ asset('tambah') }}" class="btn btn-primary mb-3"> Tambah Data Petugas</a>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">NIP</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Password</th>
              <th colspan="2" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            
            
                    <tr>
                      <th>1</th>
                      <td>ber</td>
                      <td>ber</td>
                      <td>ber</td>
                      <td>ber</td>
                      <td><a href="{{ asset('edits') }}"><i class="far fa-edit bg-success p-2 text-white rounded"></i></a></td>
                      <td><a href=""><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></a></td>
                    </tr>
                    
                   
          </tbody>
        </table>
        
      </div>

@endsection