@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

<div class="bg-form">
        <div class="card p-3">
          <div class="panel-heading bg-success p-2">
            <h3 class="panel-title text-white"  style="text-align:center" >REGISTER</h3>
          </div>
          <div class="panel-body ">
            <form action="" method="POST">
              <div class="form-group  mt-3">
                <label>Nama</label>
                <input type="text" class="form-control" name="" placeholder="Nama">
              </div>
              <div class="form-group ">
                <label>NIP</label>
                <input type="Password" class="form-control" name="" placeholder="NIP"> 
              </div>
              <div class="form-group ">
                <label>Jabatan</label>
                <input type="Password" class="form-control" name="" placeholder="Jabatan"> 
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="Password" class="form-control" name="" placeholder="Password"> 
              </div>
              <button class="btn btn-success btn-block col-md-12 mt-3" name="edit">Register</button>
              <div class="small"><a href="" class="text-secondary">Have an account? Log in!</a></div>
            </form>
          </div>
        </div> 
      </div>

@endsection