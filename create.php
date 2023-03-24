<?php

  if(isset($_POST["submit"])){

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

    // puts data in Database
    $sql = "INSERT INTO `library`(`title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, 
    `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ('$title', '$image', '$isbn', '$description', '$type', '$author_first_name', 
    '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date', '$status')";

    // alerts Success/Error
    if(mysqli_query($connect, $sql)) {
      $message = "Successfully CREATED";
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      header("Location: error.php");
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
  <link rel="stylesheet" href="components/style.css">
  <?php require "components/bootstrap.php" ?>
</head>
<body>
<?php require "navbar.php" ?>

  <div class="container  mt-5 pt-5">
    <h1>Create New Entry</h1>
    <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" placeholder="" name="title">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" placeholder="" name="image">
      </div>
      <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" placeholder="" name="isbn">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description (no ' and ")</label>
        <input type="text" class="form-control" placeholder="" name="description">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type (book, CD, DVD)</label>
        <select class="form-select" placeholder="" name="type">
          <option selected>Select</option>
          <option value="book">book</option>
          <option value="CD">CD</option>
          <option value="DVD">DVD</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="author_first_name" class="form-label">Author First Name</label>
        <input type="text" class="form-control" placeholder="" name="author_first_name">
      </div>
      <div class="mb-3">
        <label for="author_last_name" class="form-label">Author Last Name</label>
        <input type="text" class="form-control" placeholder="" name="author_last_name">
      </div>
      <div class="mb-3">
        <label for="publisher_name" class="form-label">Publisher Name</label>
        <input type="text" class="form-control" placeholder="" name="publisher_name">
      </div>
      <div class="mb-3">
        <label for="publisher_address" class="form-label">Publisher Address</label>
        <input type="text" class="form-control" placeholder="" name="publisher_address">
      </div>
      <div class="mb-3">
        <label for="publish_date" class="form-label">Publish Date (YYYY-MM-DD)</label>
        <input type="text" class="form-control" placeholder="" name="publish_date">
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status (available/reserved)</label>
        <select class="form-select" placeholder="" name="status">
          <option value="available">available</option>
          <option value="reserved">reserved</option>
        </select>
      </div>
      <!-- Create Button -->
      <button type="submit" class="btn btn-primary" name="submit">Create</button>
    </form>
  </div>


<form action="">
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
</div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">title</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
</div>
</form>

</body>
</html>