<?php
session_start();

include("en_tete.html");

include ("page_film.php");

include("Phrase_redaction_avis.html");

include("redaction_avis.html");
	
while ($donnees = $rep->fetch(PDO::FETCH_ASSOC)){  
	echo "<option>" .$donnees['Titre_film'];
}

include("fermeture_liste.html");

include("note_avis.html");
		
include("Bouton_fin_formulaire.html");


include("pied_page.html");

?>