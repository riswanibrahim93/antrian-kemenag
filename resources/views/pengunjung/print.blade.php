<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
	<h1>Kemenag</h1>
	<h2>Antrian</h2>
	<br>
	<h1>{{ $nomor }}</h1>

	<script type="text/javascript">
		window.print()
		window.close()
		// kasih delay
		window.open("http://127.0.0.1:8000/pengunjung")
	</script>

</body>
</html>