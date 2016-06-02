
<!-- Lire et écrire dans un fichier -->

<!-- Autoriser l'écriture de fichiers (chmod)-->

<!-- Pour le fichier de txt - compteur.txt - Il faut rentrer 777 pour que PHP puisse modifier le fichier en question. -->

<?php

// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');

// 2 : on lit la première ligne du fichier
$ligne = fgets($monfichier);
echo $ligne;

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);

?>



<?php

// $fichier = fopen('compteur.txt', 'r+');

// r = lecture steule
// r+ = lecture et ecriture
// a = ecriture seule (creation automatique)
// a+ = lecture et ecriture (creation automatique)

// $ligne = fgets($fichier);
// echo $ligne;



// $ecrire = fputs($fichier, 'Salut ce texte e ete ecris tout seul !');
//
// fclose($fichier);

?>
