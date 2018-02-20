<?php

if(isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $minimum = 5;
  $maximum = 10;
  $names = ["Edwin", "Dani", "Houston", "Wendy"];

  if(!in_array($username, $names)){
    echo "Sorry, you do not have an account.";
  } else {

    if(strlen($username) > $maximum){
      echo "Username must be fewer than " . $maximum . " characters.";
    } else {

      if(strlen($password) < $minimum){
        echo "Passwords must be " . ($minimum + 1) . " or more characters. Please choose a new password.<br>";
      } else {
        echo "Welcome!";
      }

    }

  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="31_32_33_form.php" method="post">

<input type="text" name="username" placeholder="Enter Username">
<input type="password"  name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">


</form>



</body>
</html>
