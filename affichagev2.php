<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'base1');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		echo 'connexion reussie! <br>';

		//requete SQL
		$requete = "select * from apprenants";
		//execution de la requete SQL
		$resultats = mysqli_query($conn, $requete) or die(mysqli_error());

		//affichage du resultat(affichage formater)
		echo "<table border>";
		echo "<tr><th>CNI</th><th>Prenom</th><th>Nom</th><th>Classe</th><th>Adresse</th></tr>";
		while($ligne = mysqli_fetch_assoc($resultats)){
			echo "<tr>";
			echo "<td>".$ligne['cni']."</td>
			<td>".$ligne['prenom']."</td>
			<td>".$ligne['nom']."</td>
			<td>".$ligne['classe']."</td>
			<td>".$ligne['adresse']."</td>
			<td><a href='supprimer.php?var=" .$ligne['cni']."'>supprimer</a></td>
			<td><a href='from_modifier.php?var=".$ligne['cni']."'>modifier</a></td>";
			echo "</tr>";
		}
			echo "</table>";
}//fin du else
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>formulaire</title>
</head>
<body>

</body>
</html>