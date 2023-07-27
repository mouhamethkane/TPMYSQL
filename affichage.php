<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'base1');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{
		echo 'connexion reussie! <br>';
		//requete SQL
		$requete = "select * from apprenants";
		//execution de la requete SQL
		$resultats = mysqli_query($conn, $requete) or die(mysqli_error());

		//affichage du resultat
		while($ligne = mysqli_fetch_assoc($resultats)){
			echo $ligne['cni'],"",$ligne['prenom'],"",$ligne['nom'],"",$ligne['classe'],"",$ligne['adresse'];
			echo "<br>";
		}

}
?>