//alert("dziala");
var uzytkownik = new Array("klasa1","klasa2","klasa3","klasa4","klasa5");
var haslo = new Array("has1","has2","has3","has4","has5");

function zaloguj()
{
	var twoj_login = document.getElementById("login_n").value;
	//alert(twoj_login);
	var twoje_haslo = document.getElementById("haslo_n").value;
	//alert(twoje_haslo);
	
	for(var i=0; i<=4; i++)
	{
		if( twoj_login == uzytkownik[i] && twoje_haslo == haslo[i] )
		{
			window.location.href="strona.html";
		}
	}
	alert("Zle dane!");
}