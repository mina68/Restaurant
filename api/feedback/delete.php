<?php

session_start();

require '../init.php';

$feedback = new Feedback();

$feedback->set_feedback_id($_POST['feedback_id']);
$results = $feedback->delete();
