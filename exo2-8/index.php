<?php
$isOk = true
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
    echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>
   </p>
   <p>
   <?php
   /* equivalent en il else */
   if ($isOk == false)
   {
     echo 'c\'est pas bon !!!';
   } else {
     echo 'c\'est ok !!';
   }
   ?>
   </p>
 </body>
</html>
