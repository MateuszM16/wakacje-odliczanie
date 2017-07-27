<script>

		var dzis = '<?= date('U') ?>';
		
		var wydarzenie = new Date(2018,5,22,12);
		var wydarzeniex = wydarzenie.getTime();

function sekundy()
	{
		
		var czas = (wydarzeniex/1000) - dzis;
		
		var sekundy =  czas;
		var minuty =  parseInt(sekundy/60);
		var godziny =  parseInt(minuty/60);
		var dni =  parseInt(godziny/24);
		var tygodnie =  parseInt(dni/7);
		

		document.getElementById("sekundy").innerHTML = 
		 sekundy + " sekund ";
		 
		 document.getElementById("minuty").innerHTML = 
		 minuty + " minut ";
		 
		 document.getElementById("godziny").innerHTML = 
		 godziny + " godzin ";
		 
		 document.getElementById("dni").innerHTML = 
		 dni + " dni ";
		 
		 document.getElementById("tygodnie").innerHTML = 
		 tygodnie + " tygodni ";
		 
		 setTimeout("sekundy()",1000);
	
	}
	
</script>