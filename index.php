<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
$a = 1;
$b = 2;
$c = 125;
function somme(){
  global $a, $b, $c;
  $b = $a + $b;
  $c = $a * $c;
}
somme();
echo $a;
echo $b;
echo $c;
?>
</body>
</html>
