@extends('layouts/print')

@section('title', 'PTSP')
@section('container')

 <div class="col-3">
	<h6 class="text-center text-bold">KEMENTRIAN AGAMA KABUPATEN TRENGGALEK</h6>
	<p class="small text-center" style="line-height: 12px"> <font size="1"> Jl. Soekarno Hatta, Gg. Apel, Kelutan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66313</font> </p>
	<hr>
	<p class="text-center">NOMOR ANTRIAN</p>
	<h1 class="text-center text-bold">{{ $nomor }}</h1>
	<p class="text-center">TERIMAKASIH</p>
	<p class="small text-center"><font size="1"> 2021 © UIN Maulana Malik Ibrahim Malang</font></p>
    

	<script type="text/javascript">
		print(); 
		location="pengunjung"
	</script>

 </div>
	

@endsection