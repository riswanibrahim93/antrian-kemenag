@extends('layouts/main_pengunjung')

@section('title', 'Pengunjung Kemenag')
@section('container')
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
		    	
		    </div>
		    <div class="col-sm-4">
		    	
		    </div>
		    <div class="col-sm-4">
    			<h4>Jumlah Antrian : {{ $jml_antrian }}</h4>
		    </div>
    	</div>
    	<br>
		<div class="row">
		    <div class="col-sm-8">
		    	<h1>
	    			{{ $nomor }}
		    	</h1>
		    	<h6>{{ $admin }}</h6>
		    	<form action="/antrian" method="post" class="d-inline">
					@csrf
					<button type="submit"class="btn btn-danger mb-1">Antri</button>
				</form>
		    </div>
		    <div class="col-sm-4">
		    	<div class="row">
		    		<h3>Admin 1</h3>
		    		<a href="/antrianA1">Panggil</a>
		    	</div>
		    	<div class="row">
		    		<h3>Admin 2</h3>
		    		<a href="/antrianA2">Panggil</a>
		    	</div>
		    </div>
	  	</div>
	  	<br><br>
	  	<hr>
	  	<div class="row">
		    <div class="col-sm-4">
		    	
		    </div>
		    <div class="col-sm-4">
		    	<h3>Antrian Berakhir</h3>
	    		<a href="/reset">Submit</a>
		    </div>
		    <div class="col-sm-4">
		    	
		    </div>
	  	</div>
	</div>
@endsection