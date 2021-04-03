@extends('layouts/admin')

@section('title', 'Daftar Petugas')
@section('container')
<div class="col-md-10 p-5 pt-2 ml-auto">
        <h5>EDIT PETUGAS</h5><hr>
        <form action="" method="">
        <div class="col-md-12">
          <div class="container">
            @foreach($petugas as $b)
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
                      <input type="input" class="form-control @error('password') is-invalid @enderror" placeholder="masukkan password petugas" name="password" autocomplete="off" value="{{ $b->password }}">
                    </div>
                  </div>
                  <div align="right">
                    <button class="btn btn-success" type="submit">Ubah</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                  </div>
                </form>
           
      </form>
      @endforeach
</div>

@endsection