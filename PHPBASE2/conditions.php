

<!-- Les conditions PHP!  -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
   <TITLE>PHP VARIABLES</TITLE>
   </HEAD>
   <BODY>
   <H1>Les conditions PHP ! </H1>
   <br />
    
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


   <!-- Vous avez ($age == 5)  -->

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

   <br />
   <br />
   
<!-- Plusieurs critères -->

   <?php
   
   $age = 8;
   $numero = 20;

   if($age > 10 AND $numero > 10 )
   {
    echo "vous aves plus de 10 ans !";
   }
  
   else
   {
    echo "Erreur";
   }
   ?>

<br />
<br />
   
<!-- if(isset(var)) - Variable définie -->

   <?php
   
   $age = 8;
   $numero = 20;
   
   if(isset($telephone))
   {
    echo "Variable définie <br/>";
   }
   else
   {
    echo "Variable non définie <br/>";
   } 

   ?>


<br />
<br />
   
<!-- if(!isset(var)) - Variable non définie -->

   <?php
   
   $age = 25;
   $numero = 20;
   
   if(!isset($autre))
   {
    echo "Variable NON Définie !";
   }
  
   ?>

<br />
<br />

   <!-- if(isset(var)) - echo  si variable existe -->

   <?php
   
   $age = 8;
   $numero = 20;
   
   if(isset($numero))
   {
    echo $numero ." " ;
   }
   
   if(isset($age))
   {
    echo $age . " ";
   } 

  ?>

  <br />
  <br />

 <!--  OU  -->
  
  <?php
   
   $age = 8;
   $numero = 20;
   
  if(isset($age) AND isset($numero))
  {
    echo $age . " " . $numero ;
  } 

  ?>


  <br />
  <br />

 <!--  SWITCH - L'instruction switch équivaut à une série d'instructions if et switch traite que les valeures existes-->
  
  <?php
   
   $age = 1;
   $numero = 20;
   
  // switch (variable) {
  //   case 'value':
  //     # code...
  //     break;
    
  //   default:
  //     # code...
  //     break;


  switch ($age)
  {
    
    case 8:
    echo "Tu es petit.";
    break;

    case 13:
    echo "Tu es au collége !";
    break;

    case 15:
    echo "Tu a 15 ans !";
    break;

    case 18:
    echo "Tu a 18 ans";
    break;


    // default - Ce cas est utilisé lorsque tous les autres cas ont échoué.

    default:
    echo "Pas des ages !";
    break;

  }

 ?>

<br />
<br />

 <!--  Les ternaires : des conditions condensées qui fait deux choses sur une seule ligne -->

<?php

$age = 24;

if ($age >= 18)
{
  $majeur = true;
}
 else
{
  $majeur = false;
}
echo $age;

?>


<!-- Les ternaires : des conditions condensées  -->

<?php

$age = 24;

$majeur = ($age >= 18) ? true : false;

?>



   </BODY>
</HTML>