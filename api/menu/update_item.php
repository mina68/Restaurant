<?php

session_start();

require '../init.php';

$menu = new Menu();
$menu->set_item_id($_POST['item_id']);
$menu->set_item_name($_POST['name']);
$menu->set_item_type($_POST['type']);
$menu->set_price($_POST['price']);
$menu->set_content($_POST['content']);
$menu->set_image_url($_POST['image_url']);
$result = $menu->add_item();