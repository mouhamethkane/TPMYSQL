<?php 
//recuperation des donnees du fromulaire
$cni = $_POST['cni'];
$nom = $_POST['nom'];
$prenom =$_POST['prenom'];
$classe =$_POST['classe'];
$adresse =$_POST['adresse'];
//connexion au serveur de BD de la base
$conn = mysqli_connect('localhost', 'root', '', 'base1');
//creation de la requete SQL pour inserer les donnes
$req="INSERT INTO apprenants(cni, nom, prenom, classe, adresse)VALUES($cni, '".$nom."', '".$prenom."', '".$classe."', '".$adresse."')";
	echo $req. '<br>';
//execution de la requete
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));
if($resultat){
	echo "Insertion reussie! <br>";
	echo "<a href='affichagev2.php'>Afficher la liste?</a>";
	echo "<a href='formulaire.html'>Inserer un autre apprenant</a>";
}
?>