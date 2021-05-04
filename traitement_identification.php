<?php 
	session_start();
?>
	
<?php 
	
	include("en_tete.php");
 
		

  
		// Déclaration des variables pour la connexion
		$serveur = 'localhost';
		$nom_base = 'location';
		$login = 'root';		//utilisateur par défaut
		$password = '';		//mot de passe par défaut pour "root" (pas de pwd)
			
		//On récupère les valeurs entrées par le client :
		
		$_SESSION['pseudo']=$_POST['pseudo'];
		$_SESSION['mdp']=$_POST['mdp'];
		
		try {
			$conn = new PDO("mysql:host=$serveur;dbname=$nom_base", $login, $password);
			// set the PDO error mode to exception
			$req_identifiant='SELECT Pseudo FROM clients WHERE Pseudo="'.$_SESSION['pseudo'].'"'; // On regarde si le pseudo rentré est dans la base à l'aide d'une requête.
			$req_mot_de_passe='SELECT mot_de_passe FROM clients WHERE Pseudo = "'.$_SESSION['pseudo'].'" and mot_de_passe="'.$_SESSION['mdp'].'"';
	        $reponse=$conn->query($req_identifiant);
			$reponse2=$conn->query($req_mot_de_passe);					
			
			
		}catch (PDOException $e) {
				echo $req . "<br>" . $e->getMessage();
		}	
			
		$conn = null;
		
		// Création d'un compteur i
		
		$i=0;
		
		while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){ // On parcourt le resultat de la requête
		
			$i++; // Incrémentation du compteur
		
		}
		// Création d'un compteur j
		
		$j=0;
		
		while ($donnees2 = $reponse2->fetch(PDO::FETCH_ASSOC)){ // On parcourt le resultat de la requête
			
			$j++;
		}
		
		echo "<br>";	
		// Enregistrement du pseudo dans une variable utile à la manipulation
		
		
	
		if ($i==1 and $j==1){
			echo "Authentification réussie, bienvenue " .$_SESSION['pseudo'];
			echo "<form><input type='submit' value='Louer un film' formaction='Page_affichage_film.php' id='val' name='val'></form>";
		}else{
			echo "Mot de passe ou Identifiant incorrect";
		}
 
	include("pied_page.php");
?>