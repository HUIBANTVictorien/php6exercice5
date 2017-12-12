<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 5 partie 3 php</title>
  </head>
</head>
<body>
  <?php
    $number = 25;
    $text = 'Bonjour j\'ai ';
    function concat($number, $text) {
      return $text.$number.' ans !';
    }
    echo concat($number, $text);
   ?>
</body>
</html>
