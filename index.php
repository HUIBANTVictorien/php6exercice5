<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 5 partie 5 php</title>
  </head>
</head>
<body>
  <a href="index.php?semaine=12">Semaine</a>
  <?php
  if (isset($_GET['semaine'])) {
  echo 'Nous sommes à la semaine : ' . $_GET['semaine'];
} else {
  echo 'Cliquez sur le lien pour afficher les informations !';
};
   ?>
</body>
</html>
