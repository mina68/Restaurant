<?php

session_start();

require '../init.php';

$menu = new Menu();
$result = $menu->get_item_by_id($_POST['item_id']);
echo json_encode($result);