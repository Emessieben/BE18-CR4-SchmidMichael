<?php
require "actions/db_connect.php";

$sql = "SELECT * FROM library";
$result = mysqli_query($connect, $sql);
$tbody = ''; // holds the content for the table to print in body

// if there is content in databse
if (mysqli_num_rows($result)  > 0) {
  // loop through database and print for each one row   
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $tbody .= "  
          <tr>
            <th scope='row'>" . $row['id'] . "</th>
            <td class='w-25'><img class='img-thumbnail w-25' src='" . $row['image'] . "'</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['author_first_name'] . " " . $row['author_last_name'] . "</td>
            <td><a class='text-decoration-none' href='publisher.php?publisher_name=" . $row['publisher_name'] . "'>" . $row['publisher_name'] . "</a></td>
            <td><a href='details.php?id=" . $row['id'] . "'><button class='btn btn-success btn-sm' type='button'>Details</button></a></td>
            <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-warning btn-sm' type='button'>Edit</button></a></td>
            <td><a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
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
  <!-- Navbar -->
  <?php require "navbar.php" ?>
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
        <?= $tbody ?>
      </tbody>
    </table>
  </div>

</body>

</html>