<?php

session_start();

require '../init.php';

$feedback = new Feedback();

$feedback->set_feedback_id($_POST['feedback_id']);
$result = $feedback->get_feedback_by_id();
echo json_encode($result);
