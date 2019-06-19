<?php

session_start();

require '../init.php';

$feedback = new Feedback();
$feedback->set_name($_POST['name']);
$feedback->set_body($_POST['body']);
$feedback->set_stars($_POST['stars']);
$feedback->set_foreign_user_id($_SESSION['user_id']);
$result = $feedback->add();
