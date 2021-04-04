<div class="bg-text-pengunjung">
        <div class="card text-center">
          <div class="card-header">
          </div>
          <div class="card-body">
            <h3>Jumlah Antrian: <b id="jml"></b></h3>
            <h3>Nomor Antrian:</h3>
            <h3 class="display-4 font-weight-bold" id="nomor"></h3>
          </div>
          <div class="card-footer">
            
           
          	
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