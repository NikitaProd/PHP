
Crypter PHP  

ex: Crypter mot "Bonjour"
<!-- Mot "Bonjour"  criptee = ebc58ab2cb4848d04ec23d83f7ddf985 -->

<?php
$var = 'Bonjour';
$var_cryptee = md5($var);
echo $var_cryptee;
?>

par ex :  pour les mots de passe :

EX:

register.php
<?php
  $pseudo = mysql_escape_string($_POST['pseudo']);
  $motdepasse = mysql_escape_string (md5($_POST['motdepasse']));
  $motdepasse2 = mysql_escape_string (md5($_POST['motdepasse2']));
  $email = mysql_escape_string($_POST['email']);
?>


login.php
<?php
/ Tout les champs ont ete remplis
  $pseudo = mysql_escape_string($_POST['pseudo']);
  $motdepasse = mysql_escape_string(md5($_POST['motdepasse']));
?>






  
