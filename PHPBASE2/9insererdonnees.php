

<!-- MySQL PHP Insérer données    -->

<!DOCTYPE HTML>

<HEAD>
   <TITLE>MySQL PHP</TITLE>
   <meta charset="utf-8">
</HEAD>

<BODY>

<H1>MySQL PHP Insérer données</H1>
<br /> 
 
<!-- MySQL PHP Insérer une entrée dans une base de données -->

<form method="POST" action="">
<input type="text" name="titre" placeholder="Titre" /><br /><br />
<input type="text" name="description" placeholder="Description" /><br /><br />
<input type="text" name="categorie" placeholder="Catégorie" /><br /><br />
<input type="submit" value="OK" />
</form>

<?php

// Connexion BD
$bdd = new PDO("mysql:host=localhost;dbname=tuto;charset=utf8", "root", "");

// Insérer une entrée dans une base de données
if(isset($_POST['titre']) AND isset($_POST['description']) AND isset($_POST['categorie']))
{

// INSERT INTO
$requete = $bdd->prepare("INSERT INTO tuto2( titre, description, categorie) VALUES( ?, ?, ?)");
$requete->execute(array($_POST['titre'], $_POST['description'], $_POST['categorie']));
}
?>

<br />
<br />
   
</BODY>
 
</HTML>
