

<!-- PHP Contact forme test -->

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<!-- Contact forme test -->
<form method="post">
Nom : <input type="text" name="nom" placeholder="Votre Nom"></br>
</br>
Prénom : <input type="text" name="prenom" placeholder="Votre Prenom"></br>
</br>
Mail : <input type="text" name="mail" placeholder="Votre Mail"></br>
</br>
Mot de passe : <input type="text" name="mdp" placeholder="Votre Mdp"></br>

</br>


<input type="submit" name="envoyer" value="Envpyer"></br>

</form>

</body>
</html>

<!-- PHP -->

<?php  

if(isset($_POST["envoyer"]))
	{
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);

		/*md5 - chifrage de mot de passe*/
		$mdp = md5($_POST['mdp']); 

        /*Affichage de resultats*/
		echo "Nom : ".$nom." | Prenom : ".$prenom." | Mot de passe : ".$mdp." ";
	}
	else
	{
		echo "ça ne marche pas !";
	}

?>
