<!DOCTYPE html>
<html>
<head>
	<title>opdracht 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
	<button><a href="enquete.php">opdracht 1</a></button>
	<button><a href="aanmerkingsformulier.php">opdracht 2</a></button>
	<button><a href="provider.php">opdracht 3</a></button>
</nav>
<div>
	<form method="post" action="">
		<h2>Adresgegevens</h2>

		Postcode:<input type="text" name="postode" value="" required/>
<br>
<br>
		Huisnummer:<input type="text" name="city" value="" required/>
<br>
<br>
		Straatnaam + Nr: <input class="Straatnaam" type="text" name="street" value="" required/> - 
		<input class="Nr" type="text" name="number" value="" required/>
<br>
<br>
		Plaats:<input class="text" type="text" name="number" value="" required/>
<br>
<br>
		<h2>Persoonlijke gegevens</h2>
		Aanhef:
<br>
		<input type="radio" name="Aanhef" value="">meneer<br>
  		<input type="radio" name="Aanhef" value="">mevrouw<br>
<br>
		Voorletter:<input type="text" name="Voorletter" value="" required/><br>
<br>
		Tussenvoegsel:<input type="text" name="Tussenvoegsel" value=""/><br>
<br>
		Achternaam:<input type="text" name="Achternaam" value="" required/><br>
<br>
		Geboortedatum:<input type="date" name="Geboortedatum" value="" required/><br>
<br>
		<h2>Overige gegevens</h2>

		Mobiel telefoonnummer:<input type="number" name="Mobiel telefoonnummer" value="" required/><br>
<br>
		Uw E-mail:<input type="text" name="email" value="" required/>
<br>
<br>
		Rekeningnummer:<input type="text" name="email" value="" required/><br>
<br>
		<input type="submit" name="verzenden" value="verzenden">
	</form>
</div>

</body>
</html>