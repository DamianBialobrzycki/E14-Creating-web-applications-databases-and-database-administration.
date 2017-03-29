<?php
	echo "Odczyt z pliku:<br><br>";
	$uchwyt = fopen("dane.txt", "r");
	$odczyt=fread($uchwyt,filesize("dane.txt"));
	/*while(!feof($uchwyt)) {
		echo fgets($uchwyt)."<br>";
	}*/
	echo $odczyt;
	fclose($uchwyt);
?>