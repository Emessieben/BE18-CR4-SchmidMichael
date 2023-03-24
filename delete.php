<?php 
  require "actions/db_connect.php";

  $id = $_GET["id"];
  $sql = "DELETE FROM library WHERE id= $id";
  if(mysqli_query($connect, $sql)){
    header("location: index.php");
  }
?>
