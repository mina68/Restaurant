<?php

session_start();

require '../init.php';

$user = new User();
$user->set_username($_POST['username']);
$user->set_address($_POST['address']);
$user->set_phone_number($_POST['phone_number']);
$user->set_password($_POST['password']);
$result = $user->create();