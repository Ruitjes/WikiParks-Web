<?php
// Connect with database.
	$username = 'wikiparks';
	$password = 'wikiparks1';
	try{
		$bdd= new PDO ("mysql:host=www.AcmeHosting.com;port=3306;dbname=wikiparks","$username", "$password");
	}
	catch(Exception $e)
	{
		die("ERROR " .$e->getMessage());
	}

?>