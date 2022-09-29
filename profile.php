<?php

include("vendor/autoload.php");

use Helpers\Auth;

$auth = Auth::check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile | PHP Project</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1 class="mt-5 mb-4">
      <?= $auth->name ?>
      
      <span class="fw-normal text-muted">
        <?= $auth->role ?>
      </span>
    </h1>

    <?php if(isset($_GET['error'])) : ?>
      <div class="alert alert-warning">
        Cannot Upload File !
      </div>
    <?php endif ?>

    <?php if($auth->photo) : ?>
      <img src="_actions/photos/<?= $auth->photo ?>" alt="Profile Picture" class="img-thumbnail mb-3" width="200">
    <?php endif ?>

    <form action="_actions/upload_photo.php" method="post" enctype="multipart/form-data">
      <div class="input-group mb-3">
        <input type="file" name="photo" class="form-control">

        <button type="submit" class="btn btn-secondary">Upload</button>
      </div>
    </form>

    <ul class="list-group">
      <li class="list-group-item">
        <span class="fw-bold">Email: </span>
        <?= $auth->email ?>
      </li>

      <li class="list-group-item">
        <span class="fw-bold">Phone: </span>
        <?= $auth->phone ?>
      </li>

      <li class="list-group-item">
        <span class="fw-bold">Address: </span>
        <?= $auth->address ?>
      </li>
    </ul>
    <br>

    <a href="admin.php" class="btn btn-warning">Manage Users</a>
    <a href="_actions/logout.php" class="btn btn-danger">Logout</a>
  </div>
</body>
</html>