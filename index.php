<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie5_Exo4</title>
</head>
<body>
    <?php
// Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

    $mois = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    //J'initialise ma variable $mois avec tous les mois de l'année. Je mets array pour dire que c'est un tableau( un tableau commence toujours par 0).
     $mois[7] = 'août';
    foreach ($mois as $key => $mois){?>
      <p><?php
      echo $mois;
            }
?></p>
</body>
</html>
