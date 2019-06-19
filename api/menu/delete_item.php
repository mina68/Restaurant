<?php

session_start();

require '../init.php';

$menu = new Menu();
$menu->set_item_id($_POST['item_id']);
$results = $menu->delete_item();