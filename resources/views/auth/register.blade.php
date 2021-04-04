@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

<div class="bg-form">
        <div class="card p-3">
          <div class="panel-heading bg-success p-2">
            <h3 class="panel-title text-white"  style="text-align:center" >REGISTER</h3>
          </div>
          <div class="panel-body ">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row mb-2 mt-2">
                    <label for="name" class="col-md-4 col-form-label">{{ __('Nama Petugas') }}</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan Nama Petugas">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="nip" class="col-md-4 col-form-label">{{ __('NIP') }}</label>

                    <div class="col-md-8">
                        <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip"placeholder="Masukkan NIP">

                        @error('nip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="jabatan" class="col-md-4 col-form-label">{{ __('Jabatan') }}</label>

                    <div class="col-md-8">
                        <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" required autocomplete="jabatan" placeholder="Masukkan Jabatan">

                        @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="password" class="col-md-4 col-form-label text-left">{{ __('Password') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan ulang password">
                    </div>
                </div>

                <div class="form-group row p-2">
                  
                        <button type="submit" class="btn btn-success">
                            {{ __('Register') }}
                        </button>
                    
                </div>
            </form>
          </div>
        </div> 
      </div>
