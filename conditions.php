<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
   <TITLE>PHP VARIABLES</TITLE>
   </HEAD>
   <BODY>
   <p>Hello world!   Les conditions ! </p>
    
   <?php

   $age = 10;

    if($age > 10)
    {
      echo " Vous avez plus que 10 ans. ";
    }

    // elseif ($age == 5) {
    //    echo"Vous aves 5 ans !";
    // }

    elseif ($age < 10)
    {
      echo "Vous avez moins de 10 ans ! <br />";
    }

    elseif ($age == 10)
    {
      echo " Vous avez 10 ans ! ";
    }

    
    else{
      echo " Erreur ! ";
    }

   ?>

   <br />
   <br />

   <?php

   $age = 15;

    if($age > 5)
    {
      echo " Vous avez plus que 5 ans. ";
    }

    elseif ($age < 5)
    {
      echo "Vous avez moins de 5 ans ! <br />";
    }

    elseif ($age == 5)
    {
      echo " Vous avez 5 ans ! ";
    }

    
    else{
      echo " Erreur ! ";
    }

   ?>


   </BODY>
</HTML>
