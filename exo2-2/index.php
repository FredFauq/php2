<?php
  $isEasy = true;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <?php
    if ($isEasy = true){
      echo 'C\'est facile !!';
    } else {
      echo 'C\'est difficile !!!';
    }
    ?>
    <p>
    <?php
    /* Un autre opérateur conditionnel est l'opérateur ternaire  ( ) ?  :   */
    echo ($isEasy = true) ? 'C\'est facile !!' : 'C\'est difficile';
    ?>
    </p>
  </body>
</html>
