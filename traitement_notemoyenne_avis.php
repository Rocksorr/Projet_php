<?php

session_start();	

include("en_tete.html");

$_SESSION['choix_avis_film']=$_POST['film'];

// Déclaration des variables pour la connexion
$serveur = 'localhost';
$nom_base = 'location';
$login = 'root';		//utilisateur par défaut
$password = '';		//mot de passe par défaut pour "root" (pas de pwd)
		
try {
	$conn = new PDO("mysql:host=$serveur;dbname=$nom_base", $login, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// set the PDO error mode to exception
	$req_traitement_moyenne='SELECT avg(note) as moyenne FROM retour,films WHERE retour.Id_film=films.Id_film and Titre_film="'.$_SESSION['choix_avis_film'].'"';
	$req_traitement_avis='SELECT Pseudo_client,avis FROM retour,films WHERE retour.Id_film=films.Id_film and Titre_film="'.$_SESSION['choix_avis_film'].'"';
	$rep_moyenne=$conn->query($req_traitement_moyenne);
	$rep_avis=$conn->query($req_traitement_avis);		
			
			
}catch (PDOException $e) {
	echo $rep_moyenne . "<br>" . $e->getMessage();
	echo $rep_avis . "<br>" . $e->getMessage();
}	

$conn=null;

while ($donnees = $rep_moyenne->fetch(PDO::FETCH_ASSOC)){ // On parcourt le resultat de la requête
	echo "La moyenne pour ce film est " .$donnees['moyenne']; // Affichage du résultat de la requête.
	
}
echo "</br>"; 
echo "</br>";

echo "Voici les avis concernant ce film : ";


while ($donnees = $rep_avis->fetch(PDO::FETCH_ASSOC)){ // On parcourt le resultat de la requête
	
	echo "</br>";
	
	echo $donnees['Pseudo_client']. " : ";
	
	echo $donnees['avis'];
		
}

include("pied_page.html");

?>
