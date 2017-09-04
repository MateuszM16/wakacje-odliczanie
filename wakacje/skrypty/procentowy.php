<script>
		
		var wydarzenie1 = new Date(2018,5,22,12);
		var wydarzeniexx = new Date('<?= date('Y n j') ?>');
		var wydarzenier = new Date(2017,8,4,12);
		var x = wydarzenie1 - wydarzenier;

function procentowy()
	{
		if(wydarzeniexx>wydarzenie1)
       {

			document.getElementById("procent").innerHTML = 
			"100% !!!";
		 
		 setTimeout("procentowy()",1000);

        }
		
		else
		{
			
			var czas = wydarzeniexx - wydarzenier;
			var procent = parseInt((czas * 100)/x);
				
			document.getElementById("procent").innerHTML = 
			procent + "% ";
				 
			setTimeout("procentowy()",1000);
		}
	
	}
	
</script>