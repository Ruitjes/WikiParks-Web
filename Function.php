<?php 

function connectToDB()
{
	$host = "localhost"; // naam / locatie database server
	$user = "wikiparks"; // gebruikersnaam om in te loggen op de database server
	$pass = "wikipars1"; // wachtwoord usbw voor usb webserver
	$dB = "wikiparks"; // naam van de database

	$connect = new mysqli($host,$user, $pass, $dB);

	return $connect;
	}

?>
