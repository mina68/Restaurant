<?php

session_start();

require '../init.php';

$cart = new Cart();
$cart->set_foreign_item_id($_POST['item_id']);
$cart->set_foreign_user_id($_SESSION['user_id']);
$cart->set_size($_POST['size']);
$cart->set_count($_POST['count']);
$result = $cart->add_item_to_cart();
echo $result;
