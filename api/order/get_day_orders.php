<?php

session_start();

require '../init.php';

$order = new Order();
if(isset($_POST['date']))
	$order->set_date($_POST['date']);
else
	$order->set_date(date('Y-m-d',time()));
$results = $order->get_day_orders();
echo json_encode($results);
