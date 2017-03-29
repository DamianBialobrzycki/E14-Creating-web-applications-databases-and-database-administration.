<?php
	$fp = fopen("licznik.txt", "r+");
	$licznik = fgets($fp);
	$licznik++;
	fseek($fp,0);
	fputs($fp,$licznik);
	echo $licznik;
	fclose($fp);
	
?>