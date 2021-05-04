<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="myStyle.css">
  </head>
  <body>
	<h1> Veuillez remplir le formulaire d'inscription </h1>
	<form method="post" name="formulaire" action="Traitement_mot_de_passe.php">
		<table>
				<tr>
					<td><label for="pseudo"> Votre pseudo : </label></td>
					<td><input type="text" id="pseudo" name="pseudo"></td>
				</tr>
				<tr>
					<td><label for="nom_client"> Votre nom : </label></td>
					<td><input type="text" id="nom" name="nom"> </td>
				</tr>
				
				<tr>
					<td><label for="prenom_client"> Votre prénom : </label></td>
					<td><input type="text" id="prenom" name="prenom"> </td>
				</tr>
				<tr>
					<td><label for="email"> Votre adresse mail :  </label></td>
					<td><input type="email" id="email" name="email"> </td>
				</tr>
				<tr>
					<td><label for="telephone"> Votre numéro de téléphone : </label></td>
					<td><input type="tel" id="tel" name="tel"> </td>
				</tr>	
				<tr>
					<td><label for="ville"> Votre ville de résidence : </label></td>
					<td><input type="text" id="ville" name="ville"> </td>
				</tr>
				<tr>
					<td><label for="code_postal"> Votre code postal : </label></td>
					<td><input type="text" id="cp" name="cp"> </td>
				</tr>
				<tr>
					<td><label for="numerovoirie"> Votre numéro de voirie : </label></td>
					<td><input type="text" id="numerovoirie" name="numerovoirie"> </td>
				</tr>
				<tr>
					<td><label for="nom_rue"> Votre nom de rue : </label></td>
					<td><input type="text" id="nom_rue" name="nom_rue"> </td>
				</tr>	
				<tr>
					<td><label for="mot_de_passe"> Veuillez entrer votre mot de passe : </label></td>
					<td><input type="password" id="mot_de_passe" name="mot_de_passe"> </td>
				</tr>
				<tr>
					<td><label for="mot_de_passe_confirmation"> Veuillez valider votre mot de passe : </label></td>
					<td><input type="password" id="mot_de_passe_confirmation" name="mot_de_passe_confirmation"> </td>
				</tr>
		</table>
		<input type="submit" name="valider" value="Soumettre">
	</form>
  <body>
</html>
