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
    <title>Edit | User Management</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .wrap {
        width: 100%;
        max-width: 400px;
        margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">
  <div class="wrap">
    <h1 class="h3 mb-3">Edit Profile</h1>

    <form action="_actions/update.php" method="post">
      <input type="text" name="name" class="form-control mb-2" placeholder="Name" value="<?=  $auth->name ?>" required>

      <input type="email" name="email" class="form-control mb-2" placeholder="Email" value="<?=  $auth->email ?>" required>

      <input type="number" name="phone" class="form-control mb-2" placeholder="Phone" value="<?=  $auth->phone ?>" required>

      <textarea name="address" class="form-control mb-2" placeholder="Address" required><?=  $auth->address ?></textarea>

      <?php if($auth->photo) : ?>
        <div class="text-start">
            <input type="checkbox" name="checkPhoto" id="checkPhoto" value="delete">
            <label for="checkPhoto" class="ms-1 form-label">Delete existing image</label>
        </div>
      <?php endif ?>

      <button type="submit" class="w-100 btn btn-lg btn-primary">Edit</button>
    </form>
    <br>

    <a href="edit_password.php">Change Password</a>
  </div>
</body>
</html>