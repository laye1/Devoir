<!DOCTYPE html>
<html>
<head>
	<title>PAGE FORMULAIRE</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h1>BIENVENUE DANS MA PAGE FORMULAIRE</h1>
<form method="POST" action="traitement.php">
	<fieldset>
		<legend>LES INFORMATIONS NECESSAIRES</legend>
		<p><label for="prenom">Votre Prénom : </label><input type="text" name="prenom" id="prenom"></p>
		<p><label for="nom">Votre Nom : </label><input type="text" name="nom" id="nom"></p>
		<p><label for="adresse">Votre Adresse : </label><input type="text" name="adresse" id="adresse"></p>
		<p><label for="ville">Votre Ville : </label><input type="text" name="ville" id="ville"></p>
		<p><label for="code">Votre Code Postal : </label><input type="text" name="code" id="code"></p>
	</fieldset>
	<p><input type="submit" value="Enregistrer"></p>
</form>
</body>
</html>