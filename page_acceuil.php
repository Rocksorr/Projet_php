<?php
	include("en_tete.php");
?>

    <h1> Bienvenue sur notre site de location de film </h1>
	<h2> Veuillez vous identifier </h2>
    <form method="post" name="formulaire" action="traitement_identification.php">
        <table>
                <tr>
                    <td><label for="pseudo"> Votre pseudo : </label></td>
                    <td><input type="text" id="pseudo" name="pseudo"> </td>
                </tr>
				
				 <tr>
                    <td><label for="password"> Votre mot de passe : </label></td>
                    <td><input type="password" id="mdp" name="mdp"> </td>
                </tr>
				
				 
	
		</table>
			<input type="submit" name="valider" value="Soumettre">
    </form>
	<a href=" Pageinscription.php"> Vous n'avez pas de compte ? </a>;
  ?>