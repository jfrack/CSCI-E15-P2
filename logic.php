<?php

if (isset($_POST['count'])) {
	$count = $_POST['count'];
	if (!is_numeric($count)) {
		return 'Sorry, only numbers 1-9.';
	}
} else {
	$count = 4;
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
if (isset($_POST['lang'])) {
	$lang = $_POST['lang'];
} else {
	$lang = "English";
}

if ($words = file('en_US.txt')) {

	$selected_words = [];
	$symbols = ['!','@','#','$','%','^','&','*'];
	$numbers = [0,1,2,3,4,5,6,7,8,9];

	for ($i = 0; $i < $count; $i++) {
		// generate random number
		$max = count($words) - 1;
		$rand = rand(0, $max);
		$word = $words[$rand];
		array_push($selected_words, $word);
	}

	if ($uppercase) {
		// loop through words and set the first letter to uppercase
		foreach ($selected_words as $i => $word) {
			$selected_words[$i] = ucfirst($word);
		}
	}

	if ($symbol) {
		//str_replace(search, replace, subject);
	}

	if ($number) {

	}

	$password = implode("- ", $selected_words);
}