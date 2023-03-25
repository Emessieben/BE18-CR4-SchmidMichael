<?php
  require "actions/db_connect.php";

  // get publisher name from url and looking for match(es) in database
  $publisher_name = $_GET["publisher_name"];
  $sql = "SELECT * FROM library WHERE publisher_name = '$publisher_name'";
  $result = mysqli_query($connect ,$sql);
  // fetch all, could be more than one 
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // check if media is available or not and change the text color via Bootstrap
  $statusAvailableOrReservedColor;
  if($row['status'] == "available"){
    $statusAvailableOrReservedColor .= "text-success";
  } else {
    $statusAvailableOrReservedColor .= "text-danger";
  }

  foreach($rows as $key => $row) {
  // bootstrap table with content
  $html .= "
      <tr>
      <th scope='row'>" . $row['id']. "</th>
      <td class='w-25'><img class='img-thumbnail w-25' src='" . $row['image'] ."'</td>
      <td>" . $row['title'] . "</td>
      <td>" . $row['author_first_name'] . " " . $row['author_last_name'] . "</td>
      <td><a class='text-decoration-none' href='publisher.php?publisher_name=" .$row['publisher_name']."'>" . $row['publisher_name'] . "</a></td>
      <td><a href='details.php?id=" .$row['id']."'><button class='btn btn-success btn-sm' type='button'>Details</button></a></td>
      <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-warning btn-sm' type='button'>Edit</button></a></td>
      <td><a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
    </tr>
    ";
}
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
<div class="mt-5 pt-5">
  <h1 class="text-center">All from Publisher: <span class="text-decoration-underline"><?= $row["publisher_name"] ?></span></h1> 
    
  <div class="container mt-5 pt-5">
      <table class="table table-hover border">
        <thead>
          <tr class="bg-primary text-white">
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
        <?= $html ?>
        </tbody>
      </table>
    </div>
</div>

</body>
</html>