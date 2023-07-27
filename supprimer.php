<?php 
$id =$_GET['var'];
//Connexion au serveur de BD
$conn = mysqli_connect('localhost', 'root', '', 'base1');
//Creation de la requete de suppression 
$req ="DELETE FROM apprenants WHERE cni =$id";
//echo "<br>$req";
$resultat = mysqli_query($conn, $req)or die(mysqli_error($conn));
if($resultat){
	echo "Suppression reussie! <br>";
	echo "<a href='affichagev2.php'>Afficher la liste</a><br>";
}
else{
	echo " Echec de la Suppression ";
}
?>