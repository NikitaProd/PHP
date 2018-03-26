
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<form method="post">

Nom : <input type="text" name="nom" placeholder="Votre Nom"></br>
Prénom : <input type="text" name="prenom" placeholder="Votre Prenom"></br>
Mail : <input type="text" name="mail" placeholder="Votre Mail"></br>
MDP : <input type="text" name="mdp" placeholder="Votre Mdp"></br>

<input type="submit" name="envoyer" value="Envpyer"></br>

</form>

</body>
</html>


</br></br>

<?php  

if(isset($_POST["envoyer"]))
	{
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$mdp = md5($_POST['mdp']);

		echo "Nom : ".$nom." Prenom : ".$prenom." . ".$mdp." ";
	}
	else
	{
		echo "ça ne marche pas !";
	}

?>
