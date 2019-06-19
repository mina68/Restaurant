<?php

session_start();

require '../init.php';

$order = new Order();
$order->set_order_id($_POST['order_id']);
$results = $order->get_order_items();
echo json_encode($results);
