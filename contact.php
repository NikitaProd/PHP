
<!-- CONTACT-------------------->

<?php
$header="MIME-Vertion:1.0\r\n";
$header.='From:"pr.com"<hello@pr.com>'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
<body>
  <div align="center">
  J\'ai envoyé ce mail avec PHP !
  <br />
  <img src="http://www.onlinetuting.com/wp-content/uploads/2015/05/php-mail-function.jpg"/>
  </div>
</body>
</html>
';

mail("mymai@mail.com", "Salut !", $message, $header);
?>

<!-- THE END-------------------->
