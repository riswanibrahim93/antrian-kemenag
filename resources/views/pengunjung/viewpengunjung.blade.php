@extends('layouts/main')

@section('title', 'PTSP')
@section('container')

      <div class="bg-text-pengunjung">
        <div class="card text-center">
          <div class="row">
            <div class="col-sm-5">
              <h3 class=" mt-5">Nomor Antrian:</h3>
              <h3 class="display-5  font-weight-bold" id="nomor"></h3>
              <h3 class=" mt-5">ke loket:</h3>
              <h3 class=" display-5 font-weight-bold" id="admin"></h3>
            </div>
            <div class="col-sm-7">
              <div class="embed-responsive embed-responsive-4by3 p-4">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GBnVNMZDQMM?autoplay=1&mute=1&loop=1&playlist=GBnVNMZDQMM" width="400" height="300"></iframe>
            </div>
          </div>
        </div>    
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous">
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
  $.getJSON("viewnomor", function(data) {
    $.each(data, function(result, nomor) {
      var hasil = nomor
      document.getElementById("nomor").innerHTML = hasil
    });
  });
  $.getJSON("viewadmin", function(data) {
    $.each(data, function(result, admin) {
      var hasil = admin
      document.getElementById("admin").innerHTML = hasil
    });
  });
}
 
</script>

@endsection