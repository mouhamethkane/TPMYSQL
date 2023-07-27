<?php
//recuperations de cni transmis via l'url
$id =$_GET['var'];
//connexiona la base et recuperation des donnees
$conn = mysqli_connect('localhost', 'root', '', 'base1');
$requete = "SELECT * FROM apprenants WHERE cni =$id";
$resultat=mysqli_query($conn,$requete)or die(mysqli_error($conn));
$ligne=mysqli_fetch_assoc($resultat);
?>

<h3> Modification des donnes de l'apprenant <?php echo $ligne['cni']; ?> </h3>

<!--Creation du formulaire dynamique et prechargement des donnees-->
<form action="modifier.php" method="post">
	<input type="hidden" name="cni" 
	value="<?php echo $ligne['cni'];?>"><br>;
	<input type="text" name="prenom" 
	value="<?php echo $ligne['prenom'];?>"><br>;
	<input type="text" name="nom" 
	value="<?php echo $ligne['nom'];?>"><br>;
	<input type="classe" name="classe" 
	value="<?php echo $ligne['classe'];?>"><br>;
	<input type="text" name="adresse" 
	value="<?php echo $ligne['adresse'];?>"><br>;
	<input type="submit" value="Enregistrer">
	<input type="reset" value="Annuler">
</form>