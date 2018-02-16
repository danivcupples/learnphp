<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$x = "outside";

function convert(){
  global $x;
  $x = inside . "<br>";
  echo $x;
}

echo $x . "<br>";

convert();

echo $x;

?>

</body>
</html>
