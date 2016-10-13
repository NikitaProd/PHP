
<!-- CONTACT FORME BASIQUE-------------------->

<?php

if(isset($_POST['mailform']))
{
  
$header="MIME-Vertion:1.0\r\n";
$header.='From:"pro.com"<contact@pro.com>'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
<body>
  <div align="center">
  <img src="http://saisie-informatique.com/wp-content/uploads/2011/04/banniere-saisie-informatique.jpg"/>
  <br />
  J\'ai envoyé ce mail avec PHP !
  <br />
  <img src="http://www.onlinetuting.com/wp-content/uploads/2015/05/php-mail-function.jpg"/>
  </div>
</body>
</html>
';
mail("pro@gmail.com", "Salut Mail !", $message, $header);
}
?>


<!-- FORME-------------------->

<form method="POST" action="">
<input type="submit" value="Recevoir un mail" name="mailform"/>
</form>


<!-- THE END-------------------->

