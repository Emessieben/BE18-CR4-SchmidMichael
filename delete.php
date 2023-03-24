<?php 
  require "actions/db_connect.php";

  // seaarch for data on the basis of id and DELETEs it from database
  $id = $_GET["id"];
  $sql = "DELETE FROM library WHERE id= $id";
  if(mysqli_query($connect, $sql)){
    header("location: index.php");
  }
?>
