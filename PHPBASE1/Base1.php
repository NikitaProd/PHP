<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>SITE</title>

</head>

<body>



TEST
</br>
<?php


// 1 Premier texte afichage

echo "Hello SIMPLON \"SIMPLON\"!<br />";


// 2 Variable

$prenom = "Nik";

echo $prenom;

echo " <br />";
echo " <br />";



// 3 Une chaîne de caractères ( string, qui signifie « chaîne » en anglais )

$texte = "blabla";
$chiffre =15;
$virgule = 10.5;
$booleen = true;

$note =10;
$note =15;


// 4

$note1 = 10;
$note2 = 15;

$somme = 10 + 15;

echo $somme;


echo " <br />";
echo " <br />";

$note1 = 10;
$note2 = 15;

$somme = $note1 + $note2 + 10;
echo $somme;

echo " <br />";
echo " <br />";

// Calcule semple

echo 17*123;

echo " <br />";
echo " <br />";



// 5

$prenom ="Nik";

echo "Bonjour";
echo " Je suis ".$prenom. " Bienvebue sur mon site web !";


echo " <br />";
echo " <br />";



// 6 PHP functions :


$aire = aire(10,20);
//echo $aire;

function aire($largeur,$longuer)
{
   $total = ($largeur*2)+($longuer*2);
   return $total;
}


// Boutons

function boutonSubmit()
{
  $html = '<a href="http://prroo.com/"><input type="submit" value="Envoyer"></a>';
  return $html;
}
echo boutonSubmit();
echo boutonSubmit();
echo boutonSubmit();
echo boutonSubmit();


echo " <br />";
echo " <br />";
?>


<!-- // 7 conditions -->
</br>

<?php

$sexe ="homme";

if($sexe=="homme")
{
  echo "Salut Homme";
}
else
{
  echo "Salut Famme";
}
echo "<br \>"

?>

</br>

<!-- // 8 conditions -->

<?php

$note = 13;

if($note<=5)
{
echo "Pas bien";
}
else if($note<=10)
{
echo "Bien";
}
else if($note<=20)
{
echo "Tres bien !";
}
?>
</br>
</br>

<!-- // 8 conditions  2 -->

<?php

$sage = "non";
$note = 14;

if ($note<=10 && $sage=="non")
{
  echo "Pas bien";
}
else
{
  echo "Bravo !";
}
?>

</br>
</br>

<!-- // 8 conditions  SWITCH  3  Valeur  >>> Action -->

<?php

$note = 20;

switch ($note) {
case 0 : echo "C'est nul";
break;
case 1 : echo "C'est 1";
break;
case 20 : echo "C'est 20  et Plus";
break;
default : echo "La note n'est pas correcte";

}
?>

</br>
</br>

<!-- // 9 conditions -->

</br>
</br>

// THE END !


</br>

<p>Text , text</p>

</body>
</html>
