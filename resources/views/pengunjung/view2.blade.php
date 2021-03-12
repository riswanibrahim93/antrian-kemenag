@extends('layouts/main_pengunjung')

@section('title', 'Pengunjung Kemenag')
@section('container')
	<!-- @if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif -->
<?php
$antrian = $nomor; 
?>
<script type="text/javascript" src="{{ asset('js/setting_sound.js') }}">
	// $(function(){
	// 	$("#play").click(function(){
	// 		document.getElementById('suarabel').play();
	// 		document.getElementById('suarabelnomorurut').play();
	// 		document.getElementById('suarabelsuarabelloket').play();
	// 	});

	// 	$("#pause").click(function(){
	// 		document.getElementById("suarabel").pause();
	// 	});

	// 	$("#stop").click(function(){
	// 		document.getElementById("suarabel").pause();
	// 		document.getElementById("suarabel").currentTime=0;
	// 	});


	// })
</script>
<audio id="suarabel" src="{{ asset('audio/Airport_Bell.mp3') }}"></audio>
<audio id="suarabelnomorurut" src="{{ asset('audio/antrian/nomor-urut.wav') }}"></audio> 
<audio id="diloket" src="{{ asset('audio/antrian/loket.wav') }}"></audio>
<?php
if($antrian > 11 && $antrian < 20){ ?>
	<audio id="antrian" src="{{ asset('audio/antrian/'.substr($antrian, -1,1).'.wav') }}"></audio>
<?php }
else if($antrian == 20){ ?>
	<audio id="antrian" src="{{ asset('audio/antrian/'.substr($antrian, 0,1).'.wav') }}"></audio>
<?php }
else if($antrian > 20 && $antrian < 100){ ?> 
	<audio id="antrian" src="{{ asset('audio/antrian/'.substr($antrian, 0,1).'.wav') }}"></audio>
	<?php
	$a=substr($antrian, -1,1);
	if($a == 0){

	}
	else{?>
		<audio id="antrian1" src="{{ asset('audio/antrian/'.$a.'.wav') }}"></audio>
<?php 
	}
}
?>
	
<audio id="loket{{ $admin }}" src="{{ asset('audio/antrian/'.$admin.'.wav') }}"></audio>
<audio id="sepuluh" src="{{ asset('audio/antrian/sepuluh.wav') }}"></audio>
<audio id="sebelas" src="{{ asset('audio/antrian/sebelas.wav') }}"></audio>
<audio id="seratus" src="{{ asset('audio/antrian/seratus.wav') }}"></audio>
<audio id="belas" src="{{ asset('audio/antrian/belas.wav') }}"></audio>
<audio id="puluh" src="{{ asset('audio/antrian/puluh.wav') }}"></audio>
<audio id="ratus" src="{{ asset('audio/antrian/ratus.wav') }}"></audio>

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
		    	<h6>Admin {{ $admin }}</h6>
		    	<form action="/antrian" method="post" class="d-inline">
					@csrf
					<button type="submit"class="btn btn-danger mb-1">Antri</button>
				</form>
		    </div>
		    <div class="col-sm-4">
		    	<div class="row">
		    		<h3>Admin 1</h3>
					<a href="/antrianA1" class="btn selanjutnya" type="submit"><i class="glyphicon glyphicon-play"></i> &nbsp;Antrian Selanjutnya</a>
		    		<button class="btn panggil" onclick="panggil('{{$antrian}}')"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp;Panggil</button>
		    	</div>
		    	<div class="row">
		    		<h3>Admin 2</h3>
					<a href="/antrianA2" class="btn selanjutnya" type="submit"><i class="glyphicon glyphicon-play"></i> &nbsp;Antrian Selanjutnya</a>
		    		<button class="btn panggil" onclick="panggil('{{$antrian}}')"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp;Panggil</button>
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
	
	<script type="text/javascript" >
		function panggil(antrian){
			var antrian = antrian
			document.getElementById("suarabel").pause();
			document.getElementById("suarabel").currentTime=0;
			document.getElementById("suarabel").play();

			//set delay
			totalWaktu = document.getElementById("suarabel").duration*1000;

			//playnomerurutnya
			setTimeout(function(){
				document.getElementById("suarabelnomorurut").pause()
				;document.getElementById("suarabelnomorurut").currentTime=0;
				document.getElementById("suarabelnomorurut").play();
			}, totalWaktu);
			totalWaktu=totalWaktu+1000;
			if (antrian < 10) {
			  setTimeout(function(){
					document.getElementById("antrian").pause();
					document.getElementById("antrian").currentTime=0;
					document.getElementById("antrian").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+1000;
			} 

			else if (antrian == 10){ 
				setTimeout(function(){
					document.getElementById("sepuluh").pause();
					document.getElementById("sepuluh").currentTime=0;
					document.getElementById("sepuluh").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+1000;
			}

			else if(antrian == 11){ 
				setTimeout(function(){
					document.getElementById("sebelas").pause();
					document.getElementById("sebelas").currentTime=0;
					document.getElementById("sebelas").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+1000;
			
			} 

			else if(antrian > 11 && antrian < 20){ 
				setTimeout(function(){
					document.getElementById("antrian").pause();
					document.getElementById("antrian").currentTime=0;
					document.getElementById("antrian").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+1000;

				setTimeout(function(){
					document.getElementById("belas").pause();
					document.getElementById("belas").currentTime=0;
					document.getElementById("belas").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+1000;
			
			}

			else if(antrian == 20){ 
				setTimeout(function(){
					document.getElementById("antrian").pause();
					document.getElementById("antrian").currentTime=0;
					document.getElementById("antrian").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+800;

				setTimeout(function(){
					document.getElementById("puluh").pause();
					document.getElementById("puluh").currentTime=0;
					document.getElementById("puluh").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+1000;
			
			}
			else if(antrian > 20 && antrian < 100){ 
				setTimeout(function(){
					document.getElementById("antrian").pause();
					document.getElementById("antrian").currentTime=0;
					document.getElementById("antrian").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+800;

				setTimeout(function(){
					document.getElementById("puluh").pause();
					document.getElementById("puluh").currentTime=0;
					document.getElementById("puluh").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+1000;

				setTimeout(function(){
					document.getElementById("antrian1").pause();
					document.getElementById("antrian1").currentTime=0;
					document.getElementById("antrian1").play();
				}, totalWaktu);
				totalWaktu=totalWaktu+800;
			}
		

			totalwaktu=totalWaktu+1000;
			setTimeout(function() {
							document.getElementById('diloket').pause();
							document.getElementById('diloket').currentTime=0;
							document.getElementById('diloket').play();
						}, totalwaktu);
			
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
							document.getElementById('loket{{ $admin }}').pause();
							document.getElementById('loket{{ $admin }}').currentTime=0;
							document.getElementById('loket{{ $admin }}').play();
						}, totalwaktu);	
		}

	</script>
@endsection