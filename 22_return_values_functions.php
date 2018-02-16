<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

  function addNumbers($n1, $n2){
    $sum = $n1 + $n2;
    return $sum;
  }

  $result = addNumbers(33, 34);
  echo $result . "<br>";
  $result = addNumbers(100, $result);
  echo $result;
?>

</body>
</html>
