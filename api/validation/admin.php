<?php

session_start();
require '../init.php';

if(isset($_POST['name']) & isset($_POST['password']))
{
    global $database;
    $name = $_POST['name'];
    $password = sha1($_POST['password']);
    $stmt = "SELECT user_id FROM users WHERE username='{$name}' AND password = '{$password}' AND admin=1";
    $user_id = $database->query($stmt)->fetchColumn();
    if($user_id)
    {
        $_SESSION['admin_id']=$user_id;
        echo true;
    }
    else
    	echo false;
}