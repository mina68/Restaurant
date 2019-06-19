<?php

session_start();

require '../init.php';

$order = new Order();
$order->set_order_id($_POST['order_id']);
$result = $order->get_order_by_id();
echo json_encode($result);
