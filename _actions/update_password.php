<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MySQL);

$oldPassword = $_POST['old_password'];
$newPassword = $_POST['password'];

if(md5($oldPassword) !== $auth->password) {
    HTTP::redirect('/edit_password.php', 'incorrect=1');
}

$table->updatePassword($auth->id, $newPassword);
HTTP::redirect('/profile.php', 'password=1');