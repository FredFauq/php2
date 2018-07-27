<?php
$age = 20
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    /* condition sous forme ternaire */
    echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>
  </p>
  <p>
    <?php
    /* equivalent en il else */
    if ($age >= 18)
    {
      echo 'Tu es majeur';
    } else {
      echo 'Tu n\'es pas majeur';
    }
    ?>
  </p>
</body>
</html>
