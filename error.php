<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php require_once 'components/bootstrap.php' ?>
</head>

<body>
  <div class="container text-center w-50">
    <div class="mt-3 mb-3">
      <h1>Invalid Request</h1>
    </div>
    <div class="alert alert-danger" role="alert">
      <p>You've made an invalid request. Please <a href="index.php" class="alert-link">go back</a> and try again.</p>
    </div>
  </div>
</body>

</html>


<!-- Old Create Form to ignore -->
<!-- <div class="container  mt-5 pt-5 w-75">
    <h1 class="text-center">Create New Entry</h1>
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
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
        <textarea type="text" class="form-control" value="" name="description"></textarea>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select class="form-select" placeholder="" name="type">
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
        <label for="status" class="form-label">Status</label>
        <select class="form-select" placeholder="" name="status">
          <option value="available">available</option>
          <option value="reserved">reserved</option>
        </select>
      </div>
      <div class="text-center">
        Create Button
        <button type="submit" class="btn btn-primary btn-lg m-3" name="submit">Create</button>
      </div>
    </form>
  </div> -->


<!-- Old Update Form to Ignore -->
<!-- <form method="POST" enctype="multipart/form-data">
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
        <textarea type="text" class="form-control" value="" name="description"><?= $toUpdate["short_description"] ?></textarea>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select class="form-select" placeholder="" name="type" value="<?= $toUpdate["type"] ?>">
          <option selected><?= $toUpdate["type"] ?></option>
          <option value="book">book</option>
          <option value="CD">CD</option>
          <option value="DVD">DVD</option>
        </select>
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
        <label for="status" class="form-label">Status</label>
        <select class="form-select" placeholder="" name="status" value="">
          <option value="<?= $toUpdate["status"] ?>"><?= $toUpdate["status"] ?></option> 
          <option value="<?= $toUpdateOtherStatus ?>"><?= $toUpdateOtherStatus ?></option>
        </select>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg m-3" name="submit">Update</button>
      </div>

    </form> -->