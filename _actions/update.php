<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MySQL);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$checkPhoto = $_POST['checkPhoto'];

$data = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'address' => $address
];

$table->updateProfile($auth->id, $data);
$auth->name = $name;
$auth->email = $email;
$auth->phone = $phone;
$auth->address = $address;

if($checkPhoto) {
    $table->deletePhoto($auth->id, null);
    unlink('photos/' . $auth->photo);
    $auth->photo = null;
}

HTTP::redirect("/profile.php", "update=1");