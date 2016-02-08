<?php

require 'Personnage.php';

$merlin = new Personnage();

$merlin->nom = 'Merlin';

$merlin->regenerer();

var_dump($merlin);

$harry = new Personnage();
$harry->nom = 'Harry';

var_dump($merlin);
var_dump($harry);

?>

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



