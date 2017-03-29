<html>
<head>
	<link rel="Stylesheet" type="text/css" href="style.css">
</head>
<body onload="licznik(i)">
	<div id="calosc">
		<div id="naglowek">	</div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Strona glowna</a></li>
				<li><a href="przepisy.php">Przepisy</a></li>
				<li><a href="przelicznik.php">Przelicznik wag</a></li>
			</ul>
		</div>
		<div id="tresc">
			<h1>Ksiazka kucharska</h1>
			<p>Na stronie znajdziesz przepisy i porady kulinarne.<br>
			Jezeli chcesz, podziel sie z nami swoim przepisem.<br>
			przeslij go na adres: <a href="mailto(przepisy@ksiazkakucharska.pl)">przepisy@ksiazkakucharska.pl</a><br>
			Kazdy z przepisow uporzadkuj w nastepujacy sposob:<br>
			- Skladniki<br>
			- Wykonanie<br>
			- Czas pracy<br>
			- Zdjecie<br>
			<i>Bo przepisy sa po to, by sie nimi podzielic</i></p>
		</div>
		<div id="licznik">
			<?php
				session_start();
				if(!isset($_SESSION['licznik']))
				{
					$_SESSION['licznik']=0;
				}
				
				$_SESSION['licznik']++;
				
				echo "Strone odwiedzono juz ".$_SESSION['licznik']." razy!";
			?>
		</div>
		<div id="stopka">by Damian Bialobrzycki <script>x=document.lastModified; document.write(x);</script> kod klepany recznie</div>
	</div>
</body>
</html>