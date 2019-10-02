<?php

	//$userCredentials =$_POPST;
	$name = $_POST['name'];

	try {
		$connexion = new PDO("mysql:host=localhost;dbname=charte;charset=utf8","identifiant","motdepasse");
		$connexion->query('INSERT INTO apprenants (name) VALUES ($name)');

	//->fetchAll();

	//echo "connect to db";
	//var_dump($result);
	//foreach ($result as $user){}
	//echo $user ['pseudo'] . <"br">

		
	} catch (Exception $error){
		echo $error->getMessage();
		
	}
	
?>