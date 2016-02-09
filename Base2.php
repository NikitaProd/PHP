

<br />
<br />

<!-- #5 Les fonctions -->

<?php
function ajout10($nombre)
{
  $operation = $nombre+10;
  echo 'si on ajout 10 a '.$nombre.' on obtient '.$opertion;
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
<br />

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
<br />
<br />



