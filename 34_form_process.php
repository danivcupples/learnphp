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
