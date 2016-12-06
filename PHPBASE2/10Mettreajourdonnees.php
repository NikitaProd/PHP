

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
<input type="text" name="id" placeholder="ID à modifier" /><br /><br />
<input type="text" name="titre" placeholder="Titre" /><br /><br />
<input type="text" name="description" placeholder="Description" /><br /><br />
<input type="text" name="categorie" placeholder="Catégorie" /><br /><br />
<input type="submit" value="OK" />
</form>

   
   
<?php

// Connexion BD PDO
$bdd = new PDO("mysql:host=localhost;dbname=tuto;charset=utf8", "root", "");

// Insérer une entrée dans une base de données
if(isset($_POST['titre']) AND isset($_POST['description']) AND isset($_POST['categorie']) AND isset($_POST['id']))
{

// UPDATE
$requete = $bdd->prepare("UPDATE tuto2 SET titre = ?, description = ?, categorie = ? WHERE  id = ?");
$requete->execute(array($_POST['titre'], $_POST['description'], $_POST['categorie'], $_POST['id']));


// UPDATE 2eme fasone faire

// $requete = $bdd->prepare("UPDATE tuto2 SET 
// 	titre = :titre, 
// 	description = :description, 
// 	categorie = :categorie WHERE  id = :id");

// $requete->execute(array(
// 	'titre' =>$_POST['titre'], 
// 	'description' =>$_POST['description'],
// 	'categorie' =>$_POST['categorie'],
// 	'id' =>$_POST['id']
// 	));

}
?>

<br />
<br />
</BODY>
 
</HTML>
