<?php

session_start();

require '../init.php';

$order = new Order();
$order->set_foreign_user_id($_SESSION['user_id']);
$order->set_tips($_POST['tips']);
$order->set_price($_POST['price']);
$order->set_notes($_POST['notes']);
$result = $order->create();
echo $result;
