<?php

	$uchwyt = fopen("dane.txt", "w+");
	
	$wiersz = "To moj tekst w pliku txt";
	fwrite($uchwyt, $wiersz);
	fclose($uchwyt);
?>