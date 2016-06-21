

<!-- PASSWORD PHP   -->

<!DOCTYPE HTML>

<HEAD>
   <TITLE>PASSWORD PHP</TITLE>
</HEAD>

<BODY>

<H1>PASSWORD PHP ! </H1>
<br />
<br /> 


<!-- PASSWORD -->

<form method="POST" action="">

PASSWORD: <br />
<input type="password" name="pass" placeholder="Password"><br /><br />

<input type="submit" value="Valier">

</form>

<br />
<br />

<!-- PHP -->

<?php

if(isset($_POST['pass']) AND $_POST['pass'] == 12345)  // Si passe correcte
{
	echo " Bravo !";
}

elseif(isset($_POST['pass']) AND empty($_POST['pass']))      // Si c est vide
{
	echo " Veuillez entrer un mot de passe !";
}

elseif(isset($_POST['pass']) AND !empty($_POST['pass']) AND $_POST['pass'] != 12345) // Si Passe ne pas vide et pas correct
{
	echo " Password incorrect ! ";
}

?>

<br />
<br />
<br />   


<H1>PAGE SECURISE PHP ! </H1>
<br />
<br /> 

<!-- FORM -->
<form method="POST" action="">

PASSWORD : <br />
<input type="password" name="pass2" placeholder="Password"><br /><br />

<input type="submit" value="Valier">

</form>

<br />
<br />

<!-- PHP PASS -->

<?php

if(isset($_POST['pass2']) AND $_POST['pass2'] == 12345)  // Si passe correcte
{
	echo " <h2> Bravo ! Page securisee !</h2> ";
}

elseif(isset($_POST['pass2']) AND empty($_POST['pass2']))      // Si c est vide
{
	echo " Veuillez entrer un mot de passe !";
}

elseif(isset($_POST['pass2']) AND !empty($_POST['pass2']) AND $_POST['pass2'] != 12345) // Si Passe ne pas vide et pas correct
{
	echo " Password incorrect ! ";
}


// Page protegee par mot de passe
if(isset($_POST['pass2']) AND $_POST['pass2'] == 12345)
{
?>

<H1>PAGE SECURISE</H1>

<p>Text   PAGE SECURISE 
Text   PAGE SECURISE 
Text   PAGE securisee
Text   PAGE SECURISE 
Text   PAGE SECURISE</p>


<?php 
}
// Fin de la page securisee 
?>


<br />
<br />

</BODY>
 
</HTML>

