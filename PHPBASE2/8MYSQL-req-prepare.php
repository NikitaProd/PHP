

<!-- MySQL PHP 1  -->

<!DOCTYPE HTML>

<HEAD>
   <TITLE>MySQL PHP</TITLE>
</HEAD>

<BODY>

<H1>MySQL PHP</H1>
<br /> 
 
<!-- MySQL PHP Requêtes préparées -->

<form methode="POST" action="">
<select name="categorie">
     <option>nechet</option>
     <option>chet</option>
     <option value='Null'>Autre</option>
</select>
<input type="submit" value="OK" />
</form>


<?php
if(isset($_GET['categorie'])){

$bdd = new PDO("mysql:host=localhost;dbname=tuto", "root", "");

$requete = $bdd->prepare("SELECT * FROM tuto1 WHERE categorie = ? ORDER BY id");
$requete->execute(array($_GET['categorie']));
?> 
<table border="1">
<?php
while($resultat = $requete->fetch())
{
?>
<tr>
	<td><?php echo $resultat['id'];?></td>
	<td><?php echo $resultat['pseudo'];?></td>
</tr>
</table>
<?php
}
}
?>

<br />
<br />
</BODY>
 
</HTML>
