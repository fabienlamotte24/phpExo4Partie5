<?php
/*Création du tableau avec les douze mois en Anglais*/
  $months = array ('January','February','march','april','may','june','july','aout','september','october','november','december');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
<?php
/*Modification de la 8eme position*/
  echo $months[7] = 'août';
?>
  </body>
</html>
