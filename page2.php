<html>
<head>
	<title>recuperation de la valeur saisi</title>
</head>
<body>
	<p>bonjour! vous sur la page 2</p>
	<?php 
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];
	echo "vous avez saisi ce nom : $nom  et ce prenom : $prenom <br>";
	
	?>
		<a href="page1.html"> Retourner a la page 1</a>
</body>
</html>