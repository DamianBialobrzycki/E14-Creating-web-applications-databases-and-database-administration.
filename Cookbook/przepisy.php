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
			<h1>Przepisy</h1>
			<p>Tu sa rozne przepisy ktorych nie chce mi sie robic</p>
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