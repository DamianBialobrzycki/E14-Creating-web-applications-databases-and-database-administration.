<?php
	$imie = $_POST["imie"];
	$uchwyt = fopen("dane.txt", "w+");
	fwrite($uchwyt, $imie);
	fclose($uchwyt);
?>