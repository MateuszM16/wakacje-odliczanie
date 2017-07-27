<?php
 
if(!$_COOKIE['wakacje']=="1")
{
	$plik="licz.txt";

	$file=fopen($plik, "r");
	flock($file, 1);
	$liczba=fgets($file, 16);
	flock($file, 3);
	fclose($file);
	$liczba++; 
 
	$file=fopen($plik, "w");
	flock($file, 2);
	fwrite($file, $liczba++);
	flock($file, 3);
	fclose($file); 
 
	setcookie("wakacje","1");
}
?>