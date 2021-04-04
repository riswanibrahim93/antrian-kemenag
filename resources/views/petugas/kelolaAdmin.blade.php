@extends('layouts/admin')

@section('title', 'Daftar Petugas')
@section('container')

<div class="col-md-10 p-5 pt-2 ml-auto">
        <!-- <H3>Selamat Datang, Admin!</H3> -->
        <h5>DAFTAR PETUGAS</h5><hr>

        <a href="{{ asset('tambah') }}" class="btn btn-primary mb-3"> Tambah Data Petugas</a>
        @if (session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
        @endif
        @if (session('update'))
            <div class="alert alert-success">
                {{ session('update') }}
            </div>
        @endif
        @if (session('hapus'))
            <div class="alert alert-danger">
                {{ session('hapus') }}
            </div>
        @endif
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIP</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
              <th colspan="2" scope="col">Aksi</th>
            </tr>
          </thead>
          @foreach($petugas as $b)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $b->nip }}</td>
          <td>{{ $b->name }}</td>
          <td>{{ $b->jabatan }}</td>
          <td>
            <!-- <a href="" class="btn btn-info">Ubah</a> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{ $b->nip }}"> <i class="far fa-edit bg-success text-white rounded"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $b->nip }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <strong>
                      <h5 class="modal-title" id="exampleModalLabel">Ubah data {{ $b->name }}</h5>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="/kelolaAdmin/{{ $b->nip }}" method="post">
                  @method('put')
                  @csrf
                  <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Nip</label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control @error('nip') is-invalid @enderror" placeholder="masukkan nip" name="nip" id="nip" autocomplete="off" value="{{ $b->nip }}">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control @error('name') is-invalid @enderror" placeholder="masukkan name petugas" name="name" autocomplete="off" value="{{ $b->name }}">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control @error('jabatan') is-invalid @enderror" placeholder="masukkan jabatan petugas" name="jabatan" autocomplete="off" value="{{ $b->jabatan }}">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="masukkan password petugas" name="password" autocomplete="off">
                    </div>
                  </div>
                  <div align="right">
                    <button class="btn btn-info" type="submit">Ubah</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                  </div>
                </form>
                  </div>
                </div>
              </div>
            </div>

            <form action="kelolaAdmin/{{ $b->nip }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit"class="btn btn-danger"><i class="fas fa-trash-alt bg-danger text-white rounded"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
        </table>
        
      </div>

@endsection