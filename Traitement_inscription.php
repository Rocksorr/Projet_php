<?php 
	session_start();
	include("en_tete.html");

	if ($_POST['mot_de_passe'] <> $_POST['mot_de_passe_confirmation']){
		echo "Le mot de passe rentré n'est pas le même que celui validé";
		echo "<form><input type='submit' value='Essayer à nouveau' formaction='Pageinscription.php' id='val' name='val'></form>";
	}else{
		echo "Merci d'avoir crée votre compte. Vos informations ont été enregistrées !";
		echo "<form><input type='submit' value='Se connecter' formaction='page_acceuil.php' id='val' name='val'></form>";
		

		// Déclaration des variables pour la connexion
		$serveur = 'localhost';
		$nom_base = 'location';
		$login = 'root';		//utilisateur par défaut
		$password = '';		//mot de passe par défaut pour "root" (pas de pwd)
		
		//On récupère les valeurs entrées par le client :
		$pseudo=$_POST['pseudo'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$tel=$_POST['tel'];
		$ville=$_POST['ville'];
		$cp=$_POST['cp'];
		$num_voierie=$_POST['numerovoirie'];
		$nom_rue=$_POST['nom_rue'];
		$mdp=$_POST['mot_de_passe'];
			

		try {
			$conn = new PDO("mysql:host=$serveur;dbname=$nom_base", $login, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req='INSERT INTO clients (Pseudo,Nom,Prenom,email,num_tel,ville_residence,code_postal,numero_voierie,nom_rue,mot_de_passe) VALUES("'.$pseudo.'","'.$nom.'","'.$prenom	.'","'.$email.'","'.$tel.'","'.$ville.'","'.$cp.'","'.$num_voierie.'","'.$nom_rue.'","'.$mdp.'")';
			$conn->exec($req);
			echo "Nouvel enregistrement ajouté !";
		}catch (PDOException $e) {
			echo $req . "<br>" . $e->getMessage();

		}	
		
		$conn = null;

	}	
			
	include("pied_page.html");
  ?>