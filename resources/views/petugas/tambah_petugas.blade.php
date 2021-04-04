@extends('layouts/admin')

@section('title', 'Daftar Petugas')
@section('container')
<div class="col-md-10 p-5 pt-2 ml-auto">
        <h5>TAMBAH PETUGAS</h5><hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
          <form action="/kelolaAdmin" method="POST">
            @csrf
            <div class="form-group row mb-2">
              <label class="col-sm-2 col-form-label">NIP</label>
              <div class="col-sm-10">
                <input type="input" class="form-control @error('nip') is-invalid @enderror" placeholder="Masukkan NIP Petugas" name="nip" id="nip" autocomplete="off" value="{{ old('nip') }}">
              </div>
            </div>
            <div class="form-group row mb-2">
              <label class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="input" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Petugas" name="name" autocomplete="off" value="{{ old('name') }}">
              </div>
            </div>
            <div class="form-group row mb-2">
              <label class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-10">
                <input type="input" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Masukkan Jabatan Petugas" name="jabatan" autocomplete="off" value="{{ old('jabatan') }}">
              </div>
            </div>
            <div class="form-group row mb-2">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off" placeholder="Masukkan Password Petugas" >
              </div>
            </div>
            <div align="right">
              <button class="btn btn-success" type="submit">Tambah</button>
              <button class="btn btn-danger" type="reset">Reset</button>
            </div>
          </form>
</div>

@endsection