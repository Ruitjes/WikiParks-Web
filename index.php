<?php 
	include"Conn.php";

	if(isset($_POST['ParkNaam']) && isset($_POST['ParkLocatie']) && isset($_POST['ParkOpeningsDagen']) && isset($_POST['ParkOpeningsTijden']) && isset($_POST['ParkPrijzen']) && isset($_POST['ParkLeeftijden']) && isset($_POST['ParkTags']) && isset($_POST['ParkBeschrijving'])) {
		$req=$bdd->prepare('INSERT INTO park(ParkNaam,ParkLocatie,ParkOpeningsDagen,ParkOpeningsTijden,ParkPrijzen,ParkLeeftijden,ParkTags,ParkBeschrijving) 
		VALUES(:ParkNaam, :ParkLocatie, :ParkOpeningsDagen, :ParkOpeningsTijden, :ParkPrijzen, :ParkLeeftijden, :ParkTags, :ParkBeschrijving)');	
		$req->execute(array(
			'ParkNaam'=>$_POST['ParkNaam'],
			'ParkLocatie'=>$_POST['ParkLocatie'],
			'ParkOpeningsDagen'=>$_POST['ParkOpeningsDagen'],
			'ParkOpeningsTijden'=>$_POST['ParkOpeningsTijden'],
			'ParkPrijzen'=>$_POST['ParkPrijzen'],
			'ParkLeeftijden'=>$_POST['ParkLeeftijden'],
        	'ParkTags'=>$_POST['ParkTags'],
        	'ParkBeschrijving'=>$_POST['ParkBeschrijving']
			));
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>WikiParks</title>
	</head>
	<body>
		<!-- Container -->
		<h1>HELLO WORLD!</h1>
	</body>
</html>