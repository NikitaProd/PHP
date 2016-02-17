
crypter PHP  



<?php
$var = 'Bonjour';
$var_cryptee = md5($var);
echo $var_cryptee;
?>

par ex :  pour les mots de passe :

EX:
<?php
  $pseudo = mysql_escape_string($_POST['pseudo']);
  $motdepasse = mysql_escape_string (md5($_POST['motdepasse']));
  $motdepasse2 = mysql_escape_string (md5($_POST['motdepasse2']));
  $email = mysql_escape_string($_POST['email']);
?>

  
