<!DOCTYPE  HTML>
   
   <HEAD>
      <TITLE>PHP VARIABLES</TITLE>
   </HEAD>
   <BODY>
      <p>Hello world PHP VARIABLES!</p>
      <?php 
      $i =15;
      $pseudo = "Nik";
      echo "J'ai ".$i." ans. <br />";

     
      echo " j'aurai 20 ans dans 5 ans ! <br /> ";

      echo '<br />';

      echo "Je suis ".$pseudo." .";

       ?>

       <br />

       <?php 
       $i =15;
       $j = 20;
       $t = $i-$j;

      echo "i = " . $i;

      echo "<br />";

      echo "j = " . $j; 

      echo "<br />";

      echo "t =" .$t;
       ?>

<br />
       <?php 
       $affichedate = date("d-m-Y");
       $heure = date("H:i:s");
       echo $affichedate;
       echo "<br />" . $heure;

        ?>

   </BODY>
</HTML>
