<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8/5</title>
  </head>
  <body>
    <p>
      <?php
      //Tableau exercice 1
        $months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
      //Afficher le tableau à l'aide d'une boucle for
        for ($numero = 0; $numero  < 12 ; $numero ++) {
          echo $months[$numero] . ' ';
        }
      ?>
    </p>
  </body>
</html>
