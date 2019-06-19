<?php

session_start();

require '../init.php';

$feedback = new Feedback();
if(isset($_POST['count']))
	$feedback->set_count($_POST['count']);
else
	$feedback->set_count(20);

$results = $feedback->get_pending_feedbacks();
echo json_encode($results);
