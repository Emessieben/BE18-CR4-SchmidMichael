<?php


  $localhost = "localhost";
  $username = "root";
  $password = "";
  $dbname = "BE18_CR4_SchmidMichael_BigLibrary";
  
  // create connection
  $connect = mysqli_connect($localhost, $username, $password, $dbname);
  // check connection
  // if (!$connect) {
  //     die("Connection failed: " . mysqli_connect_error());
  // }else {
  //     echo "Connected successfully";
  // }

?>