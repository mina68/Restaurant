<?php

session_start();

require '../init.php';

$cart = new Cart();
$cart->set_foreign_user_id($_SESSION['user_id']);
$results = $cart->get_cart_items();
echo json_encode($results);
