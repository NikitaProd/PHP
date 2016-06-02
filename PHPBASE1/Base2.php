
<!-- #5 Les fonctions -->

<?php
function ajout10($nombre)
{
  $operation = $nombre+10;
  echo 'si on ajout 10 a '.$nombre.' on obtient '.$operation;
  return $operation. '<br />';
}
echo ajout10(2);
echo ajout10(20);
echo ajout10(200);
echo ajout10(25);
echo ajout10(120);
?>

<br />
<br />


<?php
function salut($nom, $age)
{
echo 'Salut '.$nom.', ca va mon pote? Tu as '.$age.'<br />';
}
salut('Nik', 10);
salut('NIKO', 20);
salut('Nino', 35);
salut('NikNik', 45);

?>

<br />
<br />

<!-- #6 Les arrays -->

<?php

$pseudo = array("Nik","NIk2","NIk3","NIk4");

$pseudo[5] = "X";

echo $pseudo[3];

?>

<br />
<br />

<!-- #6 Les arrays  Profils-->

<?php
$profil = array('prenom' => 'Nik', 'pseudo' => 'Nik2');

foreach($profil as $cle => $element)
{
  echo  'le cle '.$cle. ' c est '  .$element.'<br />';
}
?>

<br />
<br />

<!-- #7 Les formulaires & données -->

<?php
echo $_GET['nombre'].'<br />';
echo $_GET['chifre'];
?>
<!-- Inserrer pour afichage de chifres :http://localhost/index.php?nombre=28&chifre=30 -->
<br />
<br />

<a href="?prenom=Nik&pseudo=Nik2">Dire Bonjour !</a>

<?php
if(isset($_GET['prenom']) AND isset($_GET['pseudo']))
{
  echo 'Lesse moi deviner ! Tu t\'appelles '.$_GET['prenom'].' et ton pseudo est '.$_GET['pseudo'].' !';
}
?>

<br />
<br />
<br />


<!-- #7 Les formulaires -->

<?php
if (isset($_POST['pseudo'])) {

echo ' Ton pseudo est '. $_POST['pseudo'];
}
?>

<form action="" method="post">
<input type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo']; } else { echo 'ton pseudo ici';}?>"/>
<input type="submit" name="envoyer" value="Fait peter !"/>
</form>

<br />
<br />
<br />


<!-- #7 Les formulaires Les chiffres -->

<?php
if (isset($_POST['ch'])) {
$chiffre_securise = intval($_POST['ch']);
$chiffre = 48;
echo $chiffre. ' + '. $chiffre_securise. ' = '.$chiffre+$chiffre_securise;
}
?>
<form action="" method="post">
<input type="text" name="ch" value="<?php if(isset($_POST['ch'])) { echo $_POST['ch']; } else { echo 'ton chiffre ici';}?>"/>
<input type="submit" name="envoyer" value="Ajouter 48 ! "/>
</form>

<br />
<br />
<br />*


<!-- #8 TP : page protégée par mot de passe -->

<h1>Page protegee par mot de passe</h1>

<hr/>
<br />
<br />

<form acion="" method="post">
Veuiller entrer le mot de passe ci-dessous:<br /><br />
Mot de passe : <input type="text" name="mdp" />
<input type="submit" name="envoi" value="Entrer"/>
</form>

<?php
$motdepasse='niknik';
// Etape 1 : On teste si le formulaire a bien été envoyé
if(isset($_POST['envoi'])) {
// Etape 2 : On verifie que  la case mdp est remplie et non vide
if(isset($_POST['mdp']) AND !empty($_POST['mdp'])) {
// Etape 3 : On verifie que le mot de passe entre par l'utilisateur est le mene que celui que vous ever defini
if($_POST['mdp'] == $motdepasse) {
  echo ' Bienvenue ! ';
}
else
{
$erreur = 'Attention : le mot de passe entre est errone';
}
}
else
{
$erreur = 'Attention : vous devez remplir la case mot de passe';
}
}
if(isset($erreur)) {echo $erreur;}

?>

<br />
<br />
<br />

<!-- #8 TP : PAGE SECURISE-->
<h1>Page protegee par mot de passe >>> PAGE SECURISE </h1>
<hr/>
<br />
<br />
<form acion="" method="post">
Veuiller entrer le mot de passe ci-dessous:<br /><br />
Mot de passe : <input type="text" name="mdp2" />
<input type="submit" name="envoi" value="Entrer"/>
</form>


<?php
$motdepasse='niknik';
// Etape 1 : On teste si le formulaire a bien été envoyé
if(isset($_POST['envoi'])) {
// Etape 2 : On verifie que  la case mdp est remplie et non vide
if(isset($_POST['mdp2']) AND !empty($_POST['mdp2'])) {
// Etape 3 : On verifie que le mot de passe entre par l'utilisateur est le mene que celui que vous ever defini
if($_POST['mdp2'] == $motdepasse) {
$accessgranted = 1;
}
else
{
$erreur = 'Attention : le mot de passe entre est errone';
}
}
else
{
$erreur = 'Attention : vous devez remplir la case mot de passe';
}
}

// Page protegee par mot de passe
if(!isset($accessgranted)) { ?>

<?php
if(isset($erreur)) {echo $erreur;}
?>

<?php } else {
// Debut de la page securisee  ?>

<br />
<h1>Bravo vous etes connecte</h1>
<br />
<h3>PAGE SECYRISE</h3>

<p>Text   PAGE SECURISE

PText   PAGE SECURISE Text   PAGE SECURISE Text   PAGE SECURISE </p>


<p>Text   PAGE SECURISE Text   PAGE SECURISE Text   PAGE securiseeText   PAGE SECURISE Text   PAGE SECURISE</p>

<?php }
// Fin de la page securisee ?>

<br />
<br />
<br />

<!-- #9 : Sessions & Cookies-->

<?php
session_start();

if(isset($_POST['prenom'])) {
$prenom = mysql_escape_string($_POST['prenom']);
$_SESSION['prenom'] = $prenom;
}
if(isset($_SESSION['prenom'])) {
echo 'Tu t\'appelles '.$_SESSION['prenom'];
}
?>

<form acion="" method="post">
<input type="text" name="prenom" />
<input type="submit" value="Entrer"/>
</form>

<br />
<br />
<br />

<!-- #9 : Cookies -->

<?php

if(isset($_POST['prenom2'])) {
$prenom2 = mysql_escape_string($_POST['prenom2']);  // mysql_escape_string - securite  dans la definition de la variable
setcookie('prenom2', $prenom2, time()+365*24*3600);
}
if(isset($_COOKIE['prenom2'])) {
echo htmlspecialchars($_COOKIE['prenom2']);  // htmlspecialchars - securite  affichage de la variable
}

?>
<form acion="" method="post">
<input type="text" name="prenom2" />
<input type="submit" value="Entrer"/>
</form>

<br />
<br />
<br />

<!-- #11 : Requêtes SQL en PHP -->

<?php
mysql_connect('localhost','root','standart');
mysql_select_db('Test2');

// Ajouter une donnee
// $aj_donnee = mysql_query('INSERT INTO prenom VALUES ("", "Koko")');

// Modifier une donnee
// $mod_donne = mysql_query('UPDATE prenom SET prenom ="Niko" WHERE id = 2');

// Suprimer une donnee
// $sup_donne = mysql_query('DELETE FROM prenom WHERE id = 4');


// Afficher une donnee
// $lire_donnee = mysql_query('SELECT * FROM prenom WHERE id = 2');
// $resultat = mysql_fetch_array($lire_donnee);
// echo 'Numero '.$resultat['id'];
// echo ' comporte le prenom '.$resultat['Prenom'];


// Afficher une donnee  par odbc_procedures
$lire_donnee = mysql_query('SELECT * FROM prenom ORDER BY id LIMIT 0,3') or die(mysql_error());   // or die(mysql_error()   pour montrer error
while($resultat = mysql_fetch_array($lire_donnee)) {
echo $resultat['Prenom']. '<br :>';
};
?>
<br />
<br />
<br />

<!-- #12 : Requêtes SQL en PHP  PDO-->
<h1>Requetes SQL en PHP  PDO</h1>

<?php
// On se connecte à MySQL
$pdo = new PDO('mysql:host=localhost;dbname=Test2;charset=utf8', 'root', 'standart');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Ajouter une donnee INSERT INTO
// $count = $pdo->exec('INSERT INTO prenom VALUES ("", "TOOTO3")');
// var_dump($count);  // Afficher la publication de donnees
// echo 'Les donnees sont ajoutée !';

// Modifier une donnee  UPDATE
// $count = $pdo->exec('UPDATE prenom SET prenom="TOTO1" WHERE id=12');
// echo 'Les donnees ont ete modifiees !';

// Suprimer une donnee DELETE
// $count = $pdo->exec('DELETE FROM prenom WHERE id=8');
// echo 'Les donnees ont ete suprimee !';

// Afficher ou lire une donnee
$reponse = $pdo->query('SELECT * FROM prenom');
while ($donnees = $reponse->fetch()) {
echo $donnees['id']." ".$donnees['Prenom']. '<br :>';
}
?>
<br />
<br />

<!-- #12 : Requêtes SQL en PHP  PDO   id Nom Mail -->
<h1>Requetes SQL en PHP  PDO   id Nom Mail</h1>

<?php
// On se connecte à MySQL
$pdo = new PDO('mysql:host=localhost;dbname=Test2;charset=utf8', 'root', 'standart');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Ajouter une donnee
// $count = $pdo->exec('INSERT INTO mailetnom VALUES ("", "Tsik", "Tsik@mail.com")');


// Modifier une donnee

// Suprimer une donnee


// Afficher une donnee
?>
<br />
<br />


