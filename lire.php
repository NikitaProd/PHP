
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
