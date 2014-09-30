<?php

	if (isset($_POST['count'])) {
		$count = $_POST['count'];
	}
	if (isset($_POST['uppercase'])) {
		$uppercase = true;
	} else {
		$uppercase = false;
	}
	if (isset($_POST['symbol'])) {
		$symbol = true;
	} else {
		$symbol = false;
	}
	if (isset($_POST['number'])) {
		$number = true;
	} else {
		$number = false;
	}

	if ($words = file('en_US.txt')) {
		echo 'Count: ' . count($words) . '<br>';
	}

	if ($uppercase) {

	}

	if ($symbol) {

	}

	if ($number) {

	}

	// pull data from the form

	// run logic on form responses

	// update variables to send back

	// cleanup