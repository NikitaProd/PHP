

<!-- MySQL PHP 1  -->

<!DOCTYPE HTML>

<HEAD>
   <TITLE>MySQL PHP</TITLE>
</HEAD>

<BODY>


<H1>MySQL PHP</H1>
<br /> 
 
<!-- MySQL PHP Connexion PDO -->

<?php
$bdd = new PDO("mysql:host=localhost;dbname=tuto", "root", "");
$requete = $bdd->query("SELECT * FROM tuto1 ");

while($resultat = $requete->fetch())
{
echo $resultat['id']. " . ". $resultat['pseudo']. "<br />";
$resultat ++;
}
?>
<br />
<br /> 
 
<!-- MySQL PHP ORDER BY id DESC -->

<?php
$bdd = new PDO("mysql:host=localhost;dbname=tuto", "root", "");
$requete = $bdd->query("SELECT * FROM tuto1 ORDER BY id DESC");

while($resultat = $requete->fetch())
{
echo $resultat['id']. " . ". $resultat['pseudo']. "<br />";
$resultat ++;
}
?>
<br />
<br />
 
<!-- MySQL PHP ORDER BY id DESC -->

<?php
$bdd = new PDO("mysql:host=localhost;dbname=tuto", "root", "");
$requete = $bdd->query("SELECT * FROM tuto1 ORDER BY id LIMIT 0,3");

while($resultat = $requete->fetch())
{
echo $resultat['id']. " . ". $resultat['pseudo']. "<br />";
$resultat ++;
}
?>
<br />
<br />


<!-- Afficher BDD DANS UN TABLEAU -->

<?php
$bdd = new PDO("mysql:host=localhost;dbname=tuto", "root", "");
$requete = $bdd->query("SELECT * FROM tuto1");

while($resultat = $requete->fetch())
{
?>
<table border="1">
<tr>
	<td><?php echo $resultat['id'];?></td>
	<td><?php echo $resultat['pseudo'];?></td>
</tr>
</table>
<?php
}
?>

<br />

</BODY>
 
</HTML>
