<?php

session_start();

require '../init.php';

$feedback = new Feedback();
if(isset($_POST['count']))
	$feedback->set_count($_POST['count']);
else
	$feedback->set_count(100);

if(isset($_POST['page']))
	$feedback->set_page($_POST['page']);
else
	$feedback->set_page(1);

$results = $feedback->get_approved_feedbacks();
echo json_encode($results);
