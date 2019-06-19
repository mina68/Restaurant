<?php

session_start();

require '../init.php';

$cart = new Cart();
$cart->set_foreign_user_id($_SESSION['user_id']);
$result = $cart->delete();