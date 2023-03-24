<?php
  require "actions/db_connect.php";

  $id = $_GET["id"];
  $sql = "SELECT * FROM library WHERE id= $id";
  $result = mysqli_query($connect ,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  // check if media is available or not and change the text color via Bootstrap
  $statusAvailableOrReservedColor;
  if($row['status'] == "available"){
    $statusAvailableOrReservedColor .= "text-success";
  } else {
    $statusAvailableOrReservedColor .= "text-danger";
  }

  $html = "
  <div class='container'>
  
    <div class='card mx-auto p-3 m-5' style='width: 50rem;'>
      <div class='card-body row'>
        <img src='" . $row['image'] . "' class='col-4 detail_img align-self-center' alt='" . $row['title'] . "'>
        <div class='col-8'>
          <h4 class='card-title'>" . $row['title'] . "</h4>
          <p class='card-text'>" . $row['short_description'] . "</p>
          <ul class='list-group list-group-flush'>
          <li class='list-group-item'>ISBN: " . $row['ISBN'] . "</li>
          <li class='list-group-item'>Media Type: " . $row['type'] . "</li>
          <li class='list-group-item'>Author: " . $row['author_first_name'] . " " . $row['author_last_name'] . "</li>
          <li class='list-group-item'>Publisher: " . $row['publisher_name'] . ", " . $row['publisher_address'] . "</li>
          <li class='list-group-item'>Publish Date: " . $row['publish_date'] . "</li>
          <li class='list-group-item'>Status: <span class='" . $statusAvailableOrReservedColor . "'>" . $row['status'] . "</span></li>
        </ul>
        </div>
      </div>
      <div class='card-body mx-auto'>
        <a href='index.php' class='btn btn-dark'>Go Back</a>
      </div>
    </div>
  </div>
  "
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details <?=$row["title"] ?></title>
  <link rel="stylesheet" href="components/style.css">
  <?php require_once "components/bootstrap.php" ?>
</head>
<body>
<?php require "navbar.php" ?>
  <?= $html ?>
</body>
</html>