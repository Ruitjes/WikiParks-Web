<?php
// Connect with database.
	try{
		$bdd= new PDO ("mysql:host=localhost;port=3307;dbname=wikiparks","root", "usbw");
	}
	catch(Exception $e)
	{
		die("ERROR " .$e->getMessage());
	}

?>