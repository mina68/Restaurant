<?php

session_start();

require '../init.php';

$user = new User();
$user->set_username($_POST['username']);
$user->set_password($_POST['password']);
$result = $user->verify();

echo json_encode($response);