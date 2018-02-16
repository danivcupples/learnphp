<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

function say_something ($name){
    echo "Hi there, " . $name . "!";
}

function add($num1, $num2){
    echo ($num1 + $num2);
}

function init(){
  echo "hey there" . "<br>";
  say_something("Cutie");
  echo "<br>";
  add(4, 6);
}

init();

?>

</body>
</html>
