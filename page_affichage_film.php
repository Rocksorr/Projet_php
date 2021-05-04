<?php 
		session_start();
?>
<?php 	
		
		
		include("en_tete.php");
	
		include ("page_film.php");
	
		include("Phrase_film.php");
	
		include("formulaire_liste_deroulante.php");

		while ($donnees = $rep->fetch(PDO::FETCH_ASSOC)){  
			echo "<option>" .$donnees['Titre_film'];
		}
			
		include("Bouton_fin_formulaire.php");
		
		include("traitement_identification.php");
			
		echo $_SESSION['pseudo'];
		
		include("pied_page.php");
		
		echo $_SESSION['pseudo'];
?>