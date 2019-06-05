<!DOCTYPE html>
<html>
<head>
<title> Bestel formulier </title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<nav>
	<button><a href="enquete.php">opdracht 1</a></button>
	<button><a href="aanmerkingsformulier.php">opdracht 2</a></button>
	<button><a href="provider.php">opdracht 3</a></button>
</nav>
<h1>Bestelformulier</h1>
<h2> Bij ons verkrijgbaar: </h2>
<p> 1. Kerstbrood &euro;4,55
<br> </br>
    2. Speculaas&euro;3,49
	<br> </br>
	3. Kerstboom&euro;2,50
	<br> </br>
	4. verse kalkoen &euro;5,99
	<br> </br>
	5. wilde eend &euro;4,99
	
<form>
<input type="text" placeholder="Naam">
<input type="email" placeholder="Email">
<p>Uw bestelling:</p>
<p><textarea rows="5" cols="50" id="opmerkingen" name="opmerkingen" placeholder="Geef hier uw Bestelling.">
</textarea></p>

<div>
<p> Geslacht: </p>
<input type="radio" id = "man" name="gender"><label for="mam">Man</label>
<input type="radio" id = "vrouw" name="gender"><label for="vrouw">Vrouw</label>
</div>

<form action="resultaatvorm.php" method="post">


<input type="submit" value="SUMBIT"></br></br>

</form>
</body>
</html>