<?php
require "actions/db_connect.php";

// take the data from database on the basis of id
$id = $_GET["id"];
$sql = "SELECT * FROM library WHERE id = $id";
$result = mysqli_query($connect, $sql);
$toUpdate = mysqli_fetch_assoc($result);

// variables to grab status of tpUpdate and add "checked" to available or reserved
$available;
$reserved;
$checkedStatus = $toUpdate["status"];
if ($toUpdate["status"] == "available") {
  $available = "checked";
} else {
  $reserved = "checked";
}

// same for Media Type
$bookChecked;
$cdChecked;
$dvdChecked;
if ($toUpdate["type"] == "book") {
  $bookChecked = "checked";
} elseif ($toUpdate["type"] == "CD") {
  $cdChecked = "checked";
} else {
  $dvdChecked = "checked";
}

// if click on submit updating data from database
if (isset($_POST["submit"])) {
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

  // remove ' and " from string, to avoid Error
  $description = mysqli_escape_string($connect, $description);
  // UPDATE the data in Database
  $sqlUpdate = "UPDATE `library` SET `title`='$title',`image`='$image',`ISBN`='$isbn',`short_description`='$description',
    `type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',
    `publish_date`='$publish_date',`status`='$status' WHERE id = $id";

  // alert a message for Success/Error
  if (mysqli_query($connect, $sqlUpdate)) {
    header("location: details.php?id= {$id}");
  } else {
    header("location: error.php");
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
  <!-- Style -->
  <link rel="stylesheet" href="components/style.css">
  <!-- Bootstrap -->
  <?php require "components/bootstrap.php" ?>
</head>

<body>
  <!-- Navbar -->
  <?php require "navbar.php" ?>
  <!-- Form -->
  <div class="container mt-5 pt-5 w-75">
    <h1 class="text-center">Update <?= $toUpdate["title"] ?></h1>
    <form class="border rounded p-3 m-3" method="POST" enctype="multipart/form-data">
      <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="title" value="<?= $toUpdate["title"] ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="image" value="<?= $toUpdate["image"] ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="isbn" value="<?= $toUpdate["ISBN"] ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" name="description" required><?= $toUpdate["short_description"] ?></textarea>
        </div>
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Type</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="book" <?= $bookChecked ?>>
            <label class="form-check-label" for="type">
              book
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="CD" <?= $cdChecked ?>>
            <label class="form-check-label" for="type">
              CD
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="DVD" <?= $dvdChecked ?>>
            <label class="form-check-label" for="type">
              DVD
            </label>
          </div>
        </div>
      </fieldset>
      <div class="row mb-3">
        <label for="author_first_name" class="col-sm-2 col-form-label">Author First Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="author_first_name" value="<?= $toUpdate["author_first_name"] ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="author_last_name" class="col-sm-2 col-form-label">Author Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="author_last_name" value="<?= $toUpdate["author_last_name"] ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="publisher_name" class="col-sm-2 col-form-label">Publisher Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="publisher_name" value="<?= $toUpdate["publisher_name"] ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="publisher_address" class="col-sm-2 col-form-label">Publisher Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="publisher_address" value="<?= $toUpdate["publisher_address"] ?>" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="publish_date" class="col-sm-2 col-form-label">Publish Date</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="publish_date" value="<?= $toUpdate["publish_date"] ?>" required>
        </div>
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="available" <?= $available ?>>
            <label class="form-check-label" for="status">
              available
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="reserved" <?= $reserved ?>>
            <label class="form-check-label" for="status">
              reserved
            </label>
          </div>
        </div>
      </fieldset>
      <div class="text-center">
        <!-- Update Button -->
        <button type="submit" class="btn btn-primary btn-lg m-3" name="submit" required>Update</button>
      </div>
    </form>
  </div>
</body>
</html>