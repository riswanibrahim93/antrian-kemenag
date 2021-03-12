$(function(){
		$("#play").click(function(){
			document.getElementById('suarabel').play();
			document.getElementById('suarabelnomorurut').play();
			document.getElementById('suarabelsuarabelloket').play();
		});

		$("#pause").click(function(){
			document.getElementById("suarabel").pause();
		});

		$("#stop").click(function(){
			document.getElementById("suarabel").pause();
			document.getElementById("suarabel").currentTime=0;
		});


	})