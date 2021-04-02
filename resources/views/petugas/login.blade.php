@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

<div class="bg-form">
        <div class="card p-4">
          <div class="panel-heading bg-success p-2">
            <h3 class="panel-title text-white"  style="text-align:center" >LOGIN</h3>
          </div>
          <div class="panel-body ">
            <form action="" method="POST">
              <div class="form-group mb-2 mt-3">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group mb-2">
                <label>Password</label>
                <input type="Password" class="form-control" name="password" placeholder="Password"> 
              </div>
              <button class="btn btn-success btn-block col-md-12" name="edit">Edit</button>
              <div class="small"><a href="" class="text-secondary">Need an account? Sign up!</a></div>
            </form>
          </div>
        </div> 
      </div>

@endsection