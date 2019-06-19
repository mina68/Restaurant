<?php

session_start();

require '../init.php';

$result;
$user = new User();

if (isset($_POST['phone_number'])) {
	$user->set_phone_number($_POST['phone_number']);
	$result = $user->get_user_by_phone_number();
}
elseif (isset($_POST['username'])) {
	$user->set_username($_POST['username']);
	$result = $user->get_user_by_username();
}
else {
	$user->set_user_id($_SESSION['user_id']);
	$result = $user->get_user_by_id();
}

echo json_encode($result);
