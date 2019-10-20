<?php
	try {
		$bdd= new PDO("mysql:host=localhost;dbname=CHARTE","damery","damery");
	}
		
	catch(PDOException $error){
	echo "erreur" . $error-> getMessages(); // message test pour voir si la bdd est connectee (tu le marques tel quel)
	}

	$nom = $_POST['nom']; // on crée la variable pour faire l'action: nom est égal à ce qu on va renseigner dans le bouton 'nom'

	$prenom = $_POST['prenom'];// 'nom', 'prenom', 'age' ceux sont les 'name' de nos input ci dessous

	$insert = $bdd->query("INSERT INTO SIGNATURE VALUES ('$nom' , '$prenom')");
	
?>