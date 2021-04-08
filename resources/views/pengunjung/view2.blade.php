@extends('layouts/mainAdmin')

@section('title', 'PTSP')
@section('container')

<?php
$antrian = $nomor; 
// echo $nomor;
?>
<script type="text/javascript" src="{{ asset('js/setting_sound.js') }}">

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
else{?>
	<audio id="antrian" src="{{ asset('audio/antrian/'.$antrian.'.wav') }}"></audio>
<?php 
}
 ?>

	
<audio id="loket{{ $admin }}" src="{{ asset('audio/antrian/'.$admin.'.wav') }}"></audio>
<audio id="sepuluh" src="{{ asset('audio/antrian/sepuluh.wav') }}"></audio>
<audio id="sebelas" src="{{ asset('audio/antrian/sebelas.wav') }}"></audio>
<audio id="seratus" src="{{ asset('audio/antrian/seratus.wav') }}"></audio>
<audio id="belas" src="{{ asset('audio/antrian/belas.wav') }}"></audio>
<audio id="puluh" src="{{ asset('audio/antrian/puluh.wav') }}"></audio>
<audio id="ratus" src="{{ asset('audio/antrian/ratus.wav') }}"></audio>

	<div class="bg-text-pengunjung">
        <div class="card text-center">
          <div class="card-header">
            <h2>ADMIN {{ $admin }}</h2>
          </div>
          <div class="card-body">
            <h3>Jumlah Antrian: <b id="jml"></b></h3>
            <h3>Nomor Antrian:</h3>
            <h3 class="display-4 font-weight-bold" id="nomor"></h3>
          </div>
          <div class="card-footer">
            <button class="btn btn-danger mr-3" onclick="panggil('{{$antrian}}')">Panggil Antrian</button>
            <?php 
            	if($admin == "1")
            	{
         	?>
            		<a href="/panggilAntrianA1" class="btn btn-success mr-3">Antrian Berikutnya</a>		
            <?php 
            	}
            	else
            	{
          	?>
            		<a href="/panggilAntrianA2" class="btn btn-success mr-3">Antrian Berikutnya</a>
          	<?php 
            	}
           	?>
           
          	
          </div>
        </div>
    </div>

 	<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.js') }}"></script>
 	
    <script type="text/javascript" >
		function panggil(antrian){
			var antrian = antrian
			document.getElementById("suarabel").pause();
			document.getElementById("suarabel").currentTime=0;
			document.getElementById("suarabel").play();

			//set delay
			totalWaktu = document.getElementById("suarabel").duration*800;

			//playnomerurutnya
			setTimeout(function(){
				document.getElementById("suarabelnomorurut").pause()
				;document.getElementById("suarabelnomorurut").currentTime=0;
				document.getElementById("suarabelnomorurut").play();
				console.log(document.getElementById("suarabelnomorurut"))
			}, totalWaktu);
			totalWaktu=totalWaktu+1000;
			if (antrian < 10) {
			  setTimeout(function(){
					document.getElementById("antrian").pause();
					document.getElementById("antrian").currentTime=0;
					document.getElementById("antrian").play();
					console.log(document.getElementById("antrian"))
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
					console.log(document.getElementById("antrian"))
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
							console.log(document.getElementById("diloket"))
						}, totalwaktu);
			
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
							document.getElementById('loket{{ $admin }}').pause();
							document.getElementById('loket{{ $admin }}').currentTime=0;
							document.getElementById('loket{{ $admin }}').play();
						}, totalwaktu);	
		}

	</script>



	<script type="text/javascript">
	  $(document).ready(function() {
	    selesai();
	});
	 
	function selesai() {
	  setTimeout(function() {
	    update();
	    selesai();
	  }, 200);
	}
	 
	function update() {
	  $.getJSON("viewjml", function(data) {
	    $.each(data, function(result, jml) {
	      var hasil = jml
	      document.getElementById("jml").innerHTML = hasil
	    });
	  });
	  $.getJSON("viewnomor", function(data) {
	    $.each(data, function(result, nomor) {
	      var hasil = nomor
	      document.getElementById("nomor").innerHTML = hasil
	    });
	  });
	}
	</script>
	
	
@endsection