<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  
<body>
  <h1>Articles</h1>
  
    <?php
    $articles=
    [
    ["Titre 1"," Popo"],
    ["Titre 2","Toto"],
    ["Titre 3"," Popo3"],
    ["Titre 4"," Popo4"],
    ["Titre 5"," Popo5"],
    ];

    for($i=0;$i<count($articles);$i++){
    echo "<a href='article.php?article=$i'>". $articles[$i][0]."</a><br>";
    }
    ?>
    
</body>
</html>

