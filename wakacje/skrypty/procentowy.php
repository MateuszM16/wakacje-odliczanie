<script>

		var dzis = '<?= date('U') ?>';
		
		var wydarzenie = new Date(2018,5,22,12);
		var wydarzeniex = wydarzenie.getTime();
		var wydarzenier = new Date(2017,8,4,12);
		var x = wydarzenie - wydarzenier;

function procentowy()
	{
		
		var czas = wydarzeniex - wydarzenier;
		var procent = parseInt((czas * 100)/x);
		
		 document.getElementById("procent").innerHTML = 
		 procent + "% ";
		 
		 setTimeout("procentowy()",1000);
	
	}
	
</script>