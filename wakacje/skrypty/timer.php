<script> 

	
		var dzien =  '<?= date('d') ?>';
		var miesiac =  '<?= date('m') ?>';
		var rok =  '<?= date('Y') ?>';
		var godzina =  '<?= date('H') ?>';
		var minuta =  '<?= date('i') ?>';
		var sekunda = '<?= date('s') ?>';
		var liczba = '<?= date('t') ?>';
		
	function odliczanie()
	{
		
		if(sekunda>59)
		{
			sekunda=0;
			minuta++;
			if(minuta<10)
				minuta="0"+minuta;
		}
		if(sekunda<10)
			sekunda="0"+sekunda;
		
		
		if(minuta>59)
		{
			minuta='00';
			godzina++;
			if(godzina<10)
				godzina="0"+godzina;
		}
		
		if(godzina>23)
		{
			godzina='00';
			dzien++;
			if(dzien<10)
				dzien="0"+dzien;
		}
		
		if(dzien>liczba)
		{
			dzien='01';
			miesiac++;
		}
		
		if(miesiac>12)
		{
			miesiac='01';
			rok++;
		}
		 
		document.getElementById("godzina").innerHTML = 
		 dzien+"/"+miesiac+"/"+rok+"   |   "+godzina+":"+minuta+":"+sekunda;
		 
		 sekunda++;
		
		 
		 setTimeout("odliczanie()",1000);
		 
	}
	
	
	</script>
