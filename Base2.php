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
