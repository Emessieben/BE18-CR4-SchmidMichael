<?php
  require "actions/db_connect.php";

  // get id from url and looking for match in database
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

  // bootstrap card with content
  $html = "
  <div class='container  mt-5 pt-5'>
  
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
        <a href='index.php' class='btn btn-dark mx-5'>Home</a>
        <a href='update.php?id=" .$row['id']."'><button class='btn btn-warning btn mx-5' type='button'>Edit</button></a>
        <td><a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn mx-5' type='button'>Delete</button></a></td>
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