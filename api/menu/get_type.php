<?php

session_start();

require '../init.php';

$menu = new Menu();
$menu->set_item_type($_POST['type']);
$results = $menu->get_items_by_type();
echo json_encode($results);