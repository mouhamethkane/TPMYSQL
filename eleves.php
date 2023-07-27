<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'eleves');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		echo 'connexion reussie! <br>';

		//requete SQL
		$requete = "select * from etudiants";
		//execution de la requete SQL
		$resultats = mysqli_query($conn, $requete) or die(mysqli_error());

		//affichage du resultat(affichage formater)
		echo "<table border bgcolor='coral' align='center' style='margin-top: 5px;'>";
		echo "<tr><th><strong>INE</strong></th><th>PRENOM</th><th>NOM</th><th>METIER</th><th>ADRESSE</th><th>TELEPHONE</th></tr>";
		while($ligne = mysqli_fetch_assoc($resultats)){
			echo "<tr>";
			echo "<td>".$ligne['ine']."</td>
			<td>".$ligne['prenom']."</td>
			<td>".$ligne['nom']."</td>
			<td>".$ligne['metier']."</td>
			<td>".$ligne['adresse']."</td>
			<td>".$ligne['telephone']."</td>";
			echo "<br>";
			echo "</tr>";
		}
			echo "</table>";
}//fin du else
?>