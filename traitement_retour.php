<?php 

session_start();

include("en_tete.html");

// Récupération des variables

$_SESSION['note']=$_POST['note'];

$_SESSION['film_note']=$_POST['film'];

$_SESSION['avis']=$_POST['avis'];

// Déclaration des variables pour la connexion
    $serveur = 'localhost';
    $nom_base = 'location';
    $login = 'root';        //utilisateur par défaut
    $password = '';        //mot de passe par défaut pour "root" (pas de pwd)

try {
        $conn = new PDO("mysql:host=$serveur;dbname=$nom_base", $login, $password);
        // set the PDO error mode to exception
        $req_insertion_retour='INSERT INTO retour(Pseudo_client,Id_film,note,avis) VALUES("'.$_SESSION['pseudo'].'",(SELECT Id_film FROM films WHERE Titre_film="'.$_SESSION['film_note'].'"),"'.$_SESSION['note'].'","'.$_SESSION['avis'].'")';
        $conn->exec($req_insertion_retour);
        echo "Merci d'avoir effectué un retour ! ";

}catch (PDOException $e) {
        echo $req_insertion_retour . "<br>" . $e->getMessage();
    }
	
	
include("pied_page.html");



?>