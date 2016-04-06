
<!-- Pour le fichier de txt - compteur.txt - Il faut rentrer 777 pour que PHP puisse modifier le fichier en question. -->

<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<br />
<?php

$fichier = fopen('compteur.txt', 'r+'); // Ouverture du fichier

$pages_vues = fgets($fichier);  // Lecture de la premiere ligne

$pages_vues ++; // Ajouter d'abbord 10 a chiffre pages vues  et apres changer sur ++
fseek($fichier, 0); // Remet le curceur au debut
fputs($fichier,$pages_vues); // On ecrit le nombre
fclose($fichier); // Fermeture du fichier

// Affichage :
echo 'Cette page a ete visitee '.$pages_vues.' fois !';
?>
