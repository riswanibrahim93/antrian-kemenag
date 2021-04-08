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