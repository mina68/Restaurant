<?php

session_start();

require '../init.php';

$feedback = new Feedback();
$feedback->set_name($_POST['name']);
$feedback->set_feedback_id($_POST['feedback_id']);
$feedback->set_body($_POST['body']);
$feedback->set_stars($_POST['stars']);
$result = $feedback->update();
