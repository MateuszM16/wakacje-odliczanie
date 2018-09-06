<!DOCTYPE HTML>

<HTML lang="pl">
<HEAD>

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="theme-color" content="#ffffff">

	<LINK rel="stylesheet" href="style.css" type="text/css" />
	
	<?php include ('skrypty/odwiedziny.php'); ?>
	<?php include('skrypty/timer.php'); ?>
	<?php  include('skrypty/wakacje.php'); ?>
	<?php  include('skrypty/sekundy.php'); ?>
	<?php  include('skrypty/procentowy.php'); ?>
	
	<META charset="utf-8"/>
	<TITLE>Odliczanie do wakacji 2018</TITLE>
	<META name="description" content="Na tej stronie odbywa się odliczanie do wakacji 2018"/>
	<META name="keywords" content="Wakacje, wakacje, WAKACJE, odliczanie, ile do wakacji, wakacje 2018, odliczanie do wakacji 2018"/>
	<META http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<META name="author" content="MATEUSZ MURAWSKI"/>

</HEAD>

<body onload="odliczanie(),wakacje(),sekundy(),procentowy();">

	<DIV id="strona">
	
		<DIV id="logo">	
		ODLICZANIE DO WAKACJI 2018
		</DIV>
	
		<DIV id="czas"> </DIV>
		
		<DIV id="panel">
			<DIV class="panel"> Czyli...</DIV>
			<DIV class="panel"><DIV id="sekundy"></DIV></DIV>
			<DIV class="panel"><DIV id="minuty"></DIV></DIV>
			<DIV class="panel"><DIV id="godziny"></DIV></DIV>
			<DIV class="panel"><DIV id="dni"></DIV></DIV>
			<DIV class="panel"><DIV id="tygodnie"></DIV></DIV>
			<DIV style="clear:both;"></DIV>
		</DIV>
		
		<DIV id="procentowy"> Przetrwaliśmy już <h9> <span id="procent"> </span> </h9> roku szkolnego  ;)</DIV>
		
		<DIV id="stopka"> 
			
			<DIV id="tekst">Wspólne odliczanie do wakacji 2018 </DIV>
			<DIV id="odwiedziny">Liczba odwiedzin: <?php include ('licz.txt'); ?> </DIV>
			<DIV id="online">Online: <?php include("skrypty/online.php"); ?> </DIV>
			<DIV id="godzina"> </DIV>
		
		</DIV>
		
	
	</DIV>


</BODY>
</HTML>