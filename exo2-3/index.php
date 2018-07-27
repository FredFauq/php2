<?php
  $gender = 'homme';
  $age = 20;
 ?>
 <!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
    <?php
    if ($gender = 'homme')
    {
      echo 'Vous êtes un homme et';
    } else {
      echo 'Vous êtes un femme et';
    }
    if ($age < 18)
    {
      echo ' vous êtes mineur';
    } else {
      echo ' vous êtes majeur';
    }
    ?>
    </p>
  </body>
</html>
