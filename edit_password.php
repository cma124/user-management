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
    <title>Password | User Management</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js" defer></script>

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
    <h1 class="h3 mb-3">Change Password</h1>

    <?php if(isset($_GET['incorrect'])) : ?>
      <div class="alert alert-warning alert-dismissible fade show">
        Incorrect old password !
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif ?>

    <form action="_actions/update_password.php" method="post">
      <input type="password" name="old_password" class="form-control mb-2" placeholder="Old Password" required>

      <input type="password" name="password" class="form-control mb-2" placeholder="New Password" required>

      <button type="submit" class="w-100 btn btn-lg btn-primary">Change</button>
    </form>
  </div>
</body>
</html>