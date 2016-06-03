

<!-- Les Bucles PHP!  -->

<!DOCTYPE HTML>

<HEAD>
   <TITLE>PHP BUCLES</TITLE>
</HEAD>


<BODY>

<H1>Les Bucles PHP ! </H1>

<br />
<br />   
    
<?php

$nombre = 1;
$phrase = "Phrase repetée";

while($nombre <= 5)
{
   echo $nombre . ". " . $phrase . "! <br />";
   $nombre ++;
}
?>


<!-- Les Bucles avec  FOR  !  -->
<br />
<br />   
    
<?php

$phrase = "Phrase repetée";

for($nombre = 1; $nombre <= 10; $nombre ++ )
{
  echo $nombre . " - " . $phrase . " <br />";
}

?>


</BODY>
 
</HTML>


