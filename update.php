<?php
  require "actions/db_connect.php";

  // take the data from database on the basis of id
  $id = $_GET["id"];
  $sql = "SELECT * FROM library WHERE id = $id";
  $result = mysqli_query($connect ,$sql);
  $toUpdate = mysqli_fetch_assoc($result);

  if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $image = $_POST["image"];
    $isbn = $_POST["isbn"];
    $description = $_POST["description"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $status = $_POST["status"];

    // UPDATE the data in Database
    $sqlUpdate = "UPDATE `library` SET `title`='$title',`image`='$image',`ISBN`='$isbn',`short_description`='$description',
    `type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',
    `publish_date`='$publish_date',`status`='$status' WHERE id = $id";

    // alert a message for Success/Error
    if(mysqli_query($connect, $sqlUpdate)){
      $message = "Successfully CREATED";
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      $message = "Error";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update <?= $toUpdate["title"] ?></title>
  <link rel="stylesheet" href="components/style.css">
  <?php require "components/bootstrap.php" ?>
</head>
<body>
<?php require "navbar.php" ?>

  <div class="container mt-5 pt-5">
    <h1>Update</h1>

      <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" value="<?= $toUpdate["title"] ?>" name="title">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" value="<?= $toUpdate["image"] ?>" name="image">
      </div>
      <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="number" class="form-control" value="<?= $toUpdate["ISBN"] ?>" name="isbn">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" value="<?= $toUpdate["short_description"] ?>" name="description">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type (book, CD, DVD)</label>
        <input type="text" class="form-control" value="<?= $toUpdate["type"] ?>" name="type">
      </div>
      <div class="mb-3">
        <label for="author_first_name" class="form-label">Author First Name</label>
        <input type="text" class="form-control" value="<?= $toUpdate["author_first_name"] ?>" name="author_first_name">
      </div>
      <div class="mb-3">
        <label for="author_last_name" class="form-label">Author Last Name</label>
        <input type="text" class="form-control" value="<?= $toUpdate["author_last_name"] ?>" name="author_last_name">
      </div>
      <div class="mb-3">
        <label for="publisher_name" class="form-label">Publisher Name</label>
        <input type="text" class="form-control" value="<?= $toUpdate["publisher_name"] ?>" name="publisher_name">
      </div>
      <div class="mb-3">
        <label for="publisher_address" class="form-label">Publisher Address</label>
        <input type="text" class="form-control" value="<?= $toUpdate["publisher_address"] ?>" name="publisher_address">
      </div>
      <div class="mb-3">
        <label for="publish_date" class="form-label">Publish Date (YYYY-MM-DD)</label>
        <input type="text" class="form-control" value="<?= $toUpdate["publish_date"] ?>" name="publish_date">
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status (available/reserved)</label>
        <input type="text" class="form-control" value="<?= $toUpdate["status"] ?>" name="status">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>

</body>
</html>