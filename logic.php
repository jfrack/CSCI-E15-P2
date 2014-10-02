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
if (isset($_POST['theme'])) {
	$theme = $_POST['theme'];
	switch ($theme) {
		case 'ogden':
			$dict = "dict/ogden.txt";
			break;
		case 'picture':
			$dict = "dict/picture.txt";
			break;
		case 'animals':
			$dict = "dict/animals.txt";
			break;
		case 'body':
			$dict = "dict/body.txt";
			break;
		default:
			$dict = "dict/ogden.txt";
			break;
	}
} else {
	// default
	$theme = "ogden";
	$dict = "dict/ogden.txt";
}

if ($words = file($dict)) {

	// initialize globals
	$selected_words = [];
	$selected_symbol = "";
	$selected_number = "";
	$symbols = ['!','@','#','$','%','^','&','*'];

	for ($i = 0; $i < $count; $i++) {
		// generate random number
		$max_words = count($words) - 1;
		$rand = rand(0, $max_words);
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
		// pick a random symbol from the symbols array
		$max_symbols = count($symbols) - 1;
		$rand = rand(0, $max_symbols);
		$selected_symbol = $symbols[$rand];
	}

	if ($number) {
		// pick a random number
		$selected_number = rand(0, 100);
	}

	// convert selected words array to a string and append number and/or symbol if requested
	$password = implode("- ", $selected_words) . $selected_number . $selected_symbol;
}