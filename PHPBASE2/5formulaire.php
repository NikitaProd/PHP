

<!-- FORMULAIRE PHP   -->


<!DOCTYPE HTML>

<HEAD>
   <TITLE>PHP BUCLES</TITLE>
</HEAD>


<BODY>

<H1>FORMULAIRE PHP ! </H1>
<br />
<br /> 

<!-- FORMULAIRE -->
<form method="POST" action="">


Nom: <br />
<input type="texte" name="Nom" placeholder="Nom"><br /><br />

Prenom: <br />
<input type="texte" name="Prenom" placeholder="Prenom"><br /><br />

<input type="submit" value="Valier">

</form>

<br />
<br />

<!-- PHP -->

<?php

if(isset($_POST['Nom']) AND isset($_POST['Prenom']))
{
echo $_POST['Nom'] . " <br />";
echo $_POST['Prenom'];
} 

?>

<br />
<br />   


</BODY>
 
</HTML>

