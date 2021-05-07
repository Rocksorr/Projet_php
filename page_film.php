<?php 
	include("en_tete.html");
	
		// Déclaration des variables pour la connexion
		$serveur = 'localhost';
		$nom_base = 'location';
		$login = 'root';		//utilisateur par défaut
		$password = '';		//mot de passe par défaut pour "root" (pas de pwd)
		
		try {
			$conn = new PDO("mysql:host=$serveur;dbname=$nom_base", $login, $password);
			// set the PDO error mode to exception
			$req_affichage_film='SELECT Titre_film FROM films ORDER BY Titre_film'; // On enregistre tout les noms de film à l'aide d'une requête.
			$rep=$conn->query($req_affichage_film);					
			
			
		}catch (PDOException $e) {
				echo $rep . "<br>" . $e->getMessage();
		}	
		
	include("pied_page.html");
?>