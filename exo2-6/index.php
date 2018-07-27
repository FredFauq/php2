<?php
  $gender= 'homme';
 ?>
 <!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
    <?php
    /* opérateur ternaire  ( ) ?  :   */
    echo ($gender = 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?>
    </p>
    <p>
    <?php
    /* equivalent en il else */
    if ($gender == 'homme')
    {
      echo 'C\'est une développeuse !!!';
    } else {
      echo 'C\'est un développeur !!!';
    }
    ?>
    </p>
  </body>
</html>
