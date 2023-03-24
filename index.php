<?php
  require "actions/db_connect.php";

  $sql = "SELECT * FROM library";
  $result = mysqli_query($connect ,$sql);
  $tbody=''; // holds the content for the table to print in body

  if(mysqli_num_rows($result)  > 0) {     
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
          $tbody .= "  
          <tr>
            <th scope='row'>" . $row['id']. "</th>
            <td><img class='img-thumbnail w-50' src='" . $row['image'] ."'</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['author_first_name'] . " " . $row['author_last_name'] . "</td>
            <td>" . $row['publisher_name'] . "</td>
            <td>" . $row['publish_date'] . "</td>
            <td><a href='details.php?id=" .$row['id']."'><button class='btn btn-success btn-sm' type='button'>Details</button></a></td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Update</button></a></td>
            <td><a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
          </tr>";
      };
  } else {
      $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library</title>
  <!-- CSS -->
  <link rel="stylesheet" href="components/style.css">
  <!-- Bootstrap -->
  <?php require "components/bootstrap.php" ?>
</head>
  <body>
    <?php require "navbar.php" ?>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Publish Date</th>
            <th scope="col">Details</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?= $tbody ?>
        </tbody>
      </table>
    </div>

  </body>
</html>