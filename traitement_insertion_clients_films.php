<?php

	session_start();
	
	include("en_tete.html");
	
	$_SESSION['film']=$_POST['film'];
	
	$_SESSION['date']=date("Y-m-d");
	
	$delai=strtotime("+1 month",strtotime($_SESSION['date']));
	
	$_SESSION['date_retour']=date("Y-m-d",$delai);
	
	// Déclaration des variables pour la connexion
    $serveur = 'localhost';
    $nom_base = 'location';
    $login = 'root';        //utilisateur par défaut
    $password = '';        //mot de passe par défaut pour "root" (pas de pwd)

    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$nom_base", $login, $password);
        // set the PDO error mode to exception
        $req_num_film='SELECT Id_film FROM films WHERE Titre_film="'.$_SESSION['film'].'"';
        $req_insertion_film_clients='INSERT INTO clients_films(Pseudo_client,Id_film,Date_debut,Date_fin) VALUES("'.$_SESSION['pseudo'].'",(SELECT Id_film FROM films WHERE Titre_film="'.$_SESSION['film'].'"),"'.$_SESSION['date'].'","'.$_SESSION['date_retour'].'")';
        $conn->exec($req_insertion_film_clients);
        echo "Location prise en compte ! ";

    }catch (PDOException $e) {
            echo $req_insertion_film_clients . "<br>" . $e->getMessage();
    }
	
	
	
	include("pied_page.html");

?>