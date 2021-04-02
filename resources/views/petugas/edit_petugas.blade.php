@extends('layouts/admin')

@section('title', 'Daftar Petugas')
@section('container')
<div class="col-md-10 p-5 pt-2 ml-auto">
        <h5>EDIT PETUGAS</h5><hr>
        <form action="" method="">
        <div class="col-md-12">
          <div class="container">
                <div class="form-group">
                  <label for="">Nama Petugas</label>
                  <input type="text" name="nama" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" name="username" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="text" name="password" class="form-control" >
                </div>
            <input class="btn btn-success mr-3" type="submit" name="submit" value="Edit">
            <input class="btn btn-danger mr-3" type="reset" name="submit" value="Batal">
          </div>
           
      </form>
</div>

@endsection