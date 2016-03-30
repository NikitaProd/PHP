
// Chat  basique


<?php
mysql_connect('localhost', 'root', 'root'); // connection a BD
mysql_select_db('chat');

//  montre le nombre de messages
$nm = mysql_query('SELECT COUNT(*) FROM chat') or die(mysql_error());
$nombre_de_message = mysql_fetch_array($nm);

?>
<br />
<h1>Chat basique  - <?php echo 'Messages laisse: '.$nombre_de_message['0']; ?></h1>
<br />
<hr />
<br />

<?php
$data1 = mysql_query('SELECT * FROM chat ORDER BY id DESC LIMIT 0,10') or die(mysql_error()); // afficher par order decroissent jusqu'a 10
while($donnees = mysql_fetch_array($data1)) {
echo ''.$donnees['id']. ' par '.htmlspecialchars(stripslashes($donnees['pseudo'])).':<br />';
echo htmlspecialchars(stripslashes($donnees['message'])). '<br /><br />';
}
?>

<?php
if(isset($_POST['pseudo']) AND isset($_POST['message'])) {
$pseudo = mysql_escape_string($_POST['pseudo']);
$message = mysql_escape_string($_POST['message']);
$nb_caracteres_message = strlen($message);


if($nb_caracteres_message < 500) {
mysql_query('INSERT INTO chat VALUES("","'.$pseudo.'", "'.$message.'")');
// echo 'Message envoye !'
header('Location: chat.php');
}
else
{
echo 'Message est tres long !';
}
}
?>

<!-- CONTACT FORM -->

<br />

<form action="" method="post">
Pseudo: <input type="text" name="pseudo" /><br />
Message: <textarea name="message"></textarea><br />
<input type="submit" name="Envoyer !" /><br />
</form>

<br />

<!-- THE END -->

