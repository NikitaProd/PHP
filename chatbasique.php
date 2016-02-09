
<?php
mysql_connect('localhost', 'root', 'root'); // connection a BD
mysql_select_db('chat');
?>
<h1>Chat basique</h1>
<br />
<hr />
<br />



<?php


?>

<form action="" method="post">
Pseudo: <input type="text" name="pseudo" /><br />
Message: <textarea name="message"></textarea><br />
<input type="submit" name="Envoyer !" /><br />
</form>



