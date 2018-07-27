<?php
  $age = 34;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <?php
    if ($age < 18){
      echo 'Vous êtes mineur.';
    } else {
      echo 'Vous êtes majeur.';
    }
    ?>
  </body>
</html>
