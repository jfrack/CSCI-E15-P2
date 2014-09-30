<?php require('logic.php'); ?>

<div class="container">
	<h1>xkcd Password Generator</h1>

	<h2>Your current password</h2>

	<p>Your password is:</p>

	<h2>Generate a new password</h2>

	<form method="POST" action="index.php">

		<label name="count">Number of words</label>
		<input type="text" id="count" name="count"/><br>

		<label name="uppercase">Uppercase first letter?</label>
		<input type="checkbox" name="uppercase" value="uppercase"/><br>

		<label name="symbol">Use a symbol?</label>
		<input type="checkbox" name="symbol" value="symbol"/><br>

		<label name="number">Include a number?</label>
		<input type="checkbox" name="number" value="number"/><br>

		<input type="submit" name="submit" value="submit"/>

	</form>
</div>