
<!-- CONTACT-------------------->


<?php
if(isset($_POST['mailform']))
{
  if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
  {
    $header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<hello@pro.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

    $message='
    <html>
    <body>
      <div align="left">
      <img src="http://saisie-informatique.com/wp-content/uploads/2011/04/banniere-saisie-informatique.jpg"/>
      <br />
        <u>Nom de l\'utilisateur : </u>'.$_POST['nom'].'<br />
        <u>Mail de l\'utilisateur : </u>'.$_POST['mail'].'<br />
        <br />
        <u>Message : </u>
        <br />
        '.nl2br($_POST['message']).'
        <br />
        <br />
        <img src="http://www.onlinetuting.com/wp-content/uploads/2015/05/php-mail-function.jpg"/>
      </div>
      </body>
      </html>
      ';
       mail("nikitamcarre@gmail.com", "CONTACT - MON SITE!", $message, $header);
       $msg="Votre message à été envoyé !";
    }
    else
    {
        $msg = 'Tous les champs sont obligatoir !';
    }
}
?>
<!-- FORME-------------------->


<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<h2>Contactez-nous</h2>
<br />
<form method="POST" action="">
  <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom'];}?>"/><br /><br />
  <input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail'];}?>"/><br /><br />
  <textarea name="message" placeholder="Votre message "/><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
<input type="submit" value="Envoyer message" name="mailform"/>
</form>
<?php
if(isset($msg))
{
  echo $msg;
}
?>
</body>
</html>

<!-- THE END-------------------->
