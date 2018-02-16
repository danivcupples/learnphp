<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

function greeting($name){
  echo "Hello, " . $name;
}

greeting("Dani");

function calculate($n1, $n2){
  $sum = $n1 + $n2;
  $difference = $n1 - $n2;
  $product = $n1 * $n2;
  $quotient = $n1/$n2;

  echo "<p>The sum of " . $n1 . " and " . $n2 . " is " . $sum . ".</p>";
  echo "<p>The difference of " . $n1 . " and " . $n2 . " is " . $difference . ".</p>";
  echo "<p>The product of " . $n1 . " and " . $n2 . " is " . $product . ".</p>";
  echo "<p>The quotient of " . $n1 . " and " . $n2 . " is " . $quotient . ".</p>";
}

calculate(42, 42);

?>

</body>
</html>
