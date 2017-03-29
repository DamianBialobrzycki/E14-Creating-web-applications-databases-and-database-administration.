<?php
	$login = 'klasa';
	$haslo = 'szkola';
	
	if($login == $_POST['login'] && $haslo == $_POST['haslo'] )
	{
		header('Location: strona.html');
	}
	else
	{
		echo 'Zle dane!';
	}
?>