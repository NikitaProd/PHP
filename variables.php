<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
   
<HTML>
   <HEAD>
   <TITLE>PHP VARIABLES</TITLE>
   </HEAD>
   <BODY>
      <p>Hello world!   Variable ! </p>
      <?php 
      $i =15;
      echo "j ai $i ans.";

       ?>

       <br />

       <?php 
        
        $var = "Variable";
        echo $var;

        ?>

        <br />

      <?php
      
      $var2 = 20+10;
      $nom = "Nik";

      echo $var2;

      ?>

      <br />
      <br />

      <?php

      echo " J'ai " .$var2. " ans .";

      ?>

      <?php
      echo "<br />";

      echo " Et je suis  " .$nom. " ! ";

      ?>

     <!--  // Calcul : -->
     
     
     <?php
     
     echo "<br />";
     $a = 20;
     $b = 30;

     $calcul = $a * $b;

     echo $calcul;
     ?>


   </BODY>
</HTML>
