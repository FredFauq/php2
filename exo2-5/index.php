<?php
  $age = 17;
  $gender= 'homme';
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
    <?php
    $minor = ($age < 18) ? 'mineur' : 'majeur';
    $woman = ($gender == 'femme') ? 'une femme' : 'un homme';
    echo 'Vous êtes ' . $woman . ' et vous êtes '. $minor . '.';
    ?>
    </p>
  </body>
</html>
