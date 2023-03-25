<?php

if (isset($_POST["submit"])) {

  require "actions/db_connect.php";
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
  // puts data in Database
  $sql = "INSERT INTO `library`(`title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, 
    `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ('$title', '$image', '$isbn', '$description', '$type', '$author_first_name', 
    '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date', '$status')";

  // alerts Success/Error
  if (mysqli_query($connect, $sql)) {
    $message = "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>Swal.fire(
      'Successfully created!',
      '',
      'success'
    )</script>";
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
  <title>Create New Entry</title>
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
    <h1 class="text-center">Create Entry</h1>
    <form class="border rounded p-3 m-3" method="POST" enctype="multipart/form-data">
      <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="title" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="image" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="isbn" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" name="description" required></textarea>
        </div>
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Type</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="book" checked>
            <label class="form-check-label" for="type">
              book
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="CD">
            <label class="form-check-label" for="type">
              CD
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="DVD">
            <label class="form-check-label" for="type">
              DVD
            </label>
          </div>
        </div>
      </fieldset>
      <div class="row mb-3">
        <label for="author_first_name" class="col-sm-2 col-form-label">Author First Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="author_first_name" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="author_last_name" class="col-sm-2 col-form-label">Author Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="author_last_name" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="publisher_name" class="col-sm-2 col-form-label">Publisher Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="publisher_name" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="publisher_address" class="col-sm-2 col-form-label">Publisher Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="publisher_address" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="publish_date" class="col-sm-2 col-form-label">Publish Date</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="publish_date" required>
        </div>
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="available" checked>
            <label class="form-check-label" for="status">
              available
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="reserved">
            <label class="form-check-label" for="status">
              reserved
            </label>
          </div>
        </div>
      </fieldset>
      <div class="text-center">
        <!-- Create Button -->
        <button type="submit" class="btn btn-primary btn-lg m-3" name="submit">Create</button>
      </div>
    </form>
  </div>
  <?= $message ?>
</body>
</html>
