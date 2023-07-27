<?php 
//recuperation des donnees du formulaire
$cni =$_POST['cni'];
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$classe =$_POST['classe'];
$adresse =$_POST['adresse'];

//connexion a la BD et execution  de la requete de mise a jour
$conn = mysqli_connect('localhost', 'root', '', 'base1');
$req="UPDATE apprenants
		SET prenom = '$prenom',
		nom = '$nom',
		classe = '$classe',
		adresse = '$adresse'
		WHERE cni = $cni";
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));

echo "Modification effectuer <br>";
echo "<a href='affichagev2.php'>retourner a la liste</a><br>";
?>