

<!-- MySQL PHP Chat basique    -->


<?php

// Connexion BD
$bdd = new PDO("mysql:host=localhost;dbname=tuto;charset=utf8", "root", "");


// si le pseudo et message existe
if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
{
// des variables secur - htmlspecialchars
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $message = htmlspecialchars($_POST['message']);
   // requet
   $insertmsg = $bdd->prepare("INSERT INTO chat(pseudo, message) VALUES(?, ?)");
   $insertmsg->execute(array($pseudo, $message));
}
?>

<!DOCTYPE HTML>
<HEAD>
   <TITLE>MySQL PHP</TITLE>
   <meta charset="utf-8">
</HEAD>
<BODY>
<H1>MySQL PHP Chat basique</H1>
<br /> 

 
<!-- MySQL PHP Chat basique -->

<form method="POST" action="">
<input type="text" name="pseudo" placeholder="PSEUDO" value="<?php if(isset($pseudo)){ echo $pseudo; }?>" /><br /><br />
<textarea type = "text" name="message" placeholder="MESSAGE"/></textarea><br /><br />
<input type="submit" value="ENVOYER" />
</form>

<br /><br />
<H1>Messages de chat basique : </H1>

<?php

// Afficher le chat 
$allmsg = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 0,5');
while($msg = $allmsg->fetch())   // bucle pour chercher les informations
{
   
// Afficher le chat  HTML 
?>
<br />
<b>Message de </b><?php echo $msg['pseudo'] ?><br /><br />
<b>Message : </b><?php echo $msg['message'] ?><br /><br /><hr />

<?php
}
?>

<br />
<br />

</BODY>
 
</HTML>
