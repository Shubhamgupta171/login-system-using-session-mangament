<?php 
    $host= 'localhost';
    $user= 'root';
    $password = "";
    $database = 'loginsystem';

    $conn = mysqli_connect($host,$user,$password,$database);

    if (!$conn) //if connection failed
    {                                             
        die("Connection failed: " . mysqli_connect_error());     
      }

?>