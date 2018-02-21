<?php

// if(isset($_POST['submit'])) {
//
// $username = $_POST['username'];
// $password = $_POST['password'];

   $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
    if(!$connection) {
        die("Database connection failed");
    }

    //create query 
    // $query = "INSERT INTO users(username, password) ";
    // $query .= "VALUES ('$username', '$password')";

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die('Query failed!' . mysqli_error());
    }
  // }
?>
