<?php 

if(!session_id()) session_start();

$ID = session_id();
$czas = time();
$do_zapisania="$ID:$czas";
$min_czas=300; //czas odœwie¿ania w sekundach 300s = 5min
$plik="online.txt";
$nowa=false;

$czytaj_plik = fopen("$plik", "r");
$uzytkownicy = fread($czytaj_plik, filesize("$plik"));
fclose($czytaj_plik);

if ($uzytkownicy=="")
{
    $ile=1;
    $do_pliku=$do_zapisania;
}
else
{
    $uzytkownik=explode("\n",$uzytkownicy);
    while (list($key,$value)=each($uzytkownik))
    {
        list($stary_ID, $stary_czas) = explode(":",$value);
        if ($stary_ID!=$ID)
        {
            if ($czas-$stary_czas<$min_czas)
            {
                $nowa_zawartosc[]=$stary_ID.":".$stary_czas;
            }
        }
        else
        {
            $nowa_zawartosc[]=$do_zapisania;
            $nowa=true;
        }
    }

    if ($nowa==false) {$nowa_zawartosc[]=$do_zapisania;}
    $ile=count($nowa_zawartosc);
    $do_pliku=implode("\n",$nowa_zawartosc);
}

$zapisz_plik = fopen("$plik", "w");
fwrite($zapisz_plik , $do_pliku);
fclose($zapisz_plik );

echo "$ile";

?>
