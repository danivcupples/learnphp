<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$number = array('juanita', 'maria', 'jose');

// print_r($number);

echo $number[0] . "<br>";
echo "<br>";


// Associative Array Below

$names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );
$my_name = ["first_name" => "Dani", "last_name" => "Cupples"];

// print_r($names);

echo $names['first_name'] . " " . $names['Last_Name'];

// print_r($my_name);

echo "<h3>" . $my_name["first_name"] . " " . $my_name["last_name"] . " ";


?>

</body>
</html>
