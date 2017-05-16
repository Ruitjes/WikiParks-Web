<?php 
	include("Conn.php");
	//include("Function.php");

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

		$query = "SELECT * FROM `park'";
		$result = $connect->query($query);

		
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>WikiParks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" style="border-radius: 0px; background-color: darkorange;">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a style="background-color: darkorange;" href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Locaties<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Drenthe</a></li>
            <li><a href="#">Flevoland</a></li>
            <li><a href="#">Friesland</a></li>
            <li><a href="#">Gelderland</a></li>
            <li><a href="#">Groningen</a></li>
            <li><a href="#">Limburg</a></li>
            <li><a href="#">Noord-Brabant</a></li>
            <li><a href="#">Noord-Holland</a></li>
            <li><a href="#">Overijssel</a></li>
            <li><a href="#">Utrecht</a></li>
            <li><a href="#">Zeeland</a></li>
            <li><a href="#">Zuid-Holland</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--<div class="banner">
  <img src="img/banner3.jpeg" width="100%" height="250px;">
</div>-->

