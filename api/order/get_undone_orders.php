<?php

session_start();

require '../init.php';

$order = new Order();
$results = $order->get_undone_orders();
echo json_encode($results);
