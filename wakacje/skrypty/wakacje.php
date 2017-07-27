<script>

		var dzis = '<?= date('U') ?>';
		
		var wydarzenie = new Date(2018,5,22,12);
		var wydarzeniex = wydarzenie.getTime();

function wakacje()
	{
		
		var czas = (wydarzeniex/1000) - dzis;
		
		var sekundy = czas;
		var minuty = sekundy/60;
		var godziny = minuty/60;
		var dni = godziny/24;
		
		var s = Math.floor(sekundy  % 60);    
				if(s<10) s = "0"+s;
			
        var min = Math.floor(minuty % 60); 
				if(min<10) min = "0"+min;
				
        var h = Math.floor(godziny % 24);
				if(h<10) h = "0"+h;
				
		var d = Math.floor(dni);
		
		dzis++;

		document.getElementById("czas").innerHTML = 
		 d+" dni "+h+" godzin "+min+ " minut "+ s + " sekund ";
		 
		 setTimeout("wakacje()",1000);
	
	}
	
</script>