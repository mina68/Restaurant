<?php

session_start();

require '../init.php';

$order = new Order();
$order->set_foreign_user_id($_SESSION['user_id']);
$order->set_order_id($_POST['order_id']);
$order->add_items_to_order();

