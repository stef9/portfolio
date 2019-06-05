<!DOCTYPE html>
<html>
<head>
<title> Klachten formulier </title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<nav>
	<button><a href="enquete.php">opdracht 1</a></button>
	<button><a href="aanmerkingsformulier.php">opdracht 2</a></button>
	<button><a href="provider.php">opdracht 3</a></button>
</nav>
<h1>Aanmerkings formulier</h1>
<form>
	
<input type="text" placeholder="Naam">
<input type="email" placeholder="Email">
<p>Opmerkingen?</p>
<p><textarea rows="5" cols="50" id="opmerkingen" name="opmerkingen" placeholder="Geef hier uw aanmerkingen.">
</textarea></p>

<div>
<input type="radio" id = "man" name="gender"><label for="mam">Man</label>
<input type="radio" id = "vrouw" name="gender"><label for="vrouw">Vrouw</label>
</div>

		<form method="post" action="resultaatvorm.php">
	  Datum:<INPUT TYPE="date" NAME="Datum">
	  <br><br>
	 Afspraak:<INPUT TYPE="text" NAME="Afspraak">
	  <br><br>
	  Adres: <input TYPE="text" name="adres">
	  <br><br>
	  <input TYPE="submit" name="submit" value="Submit">
	</form>
</body>
</html>