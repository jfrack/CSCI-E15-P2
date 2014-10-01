<?php require('logic.php'); ?>

<div class="container">
	<h1>xkcd Password Generator</h1>

	<h3>Your password is: <?php echo ($password) ? $password : ''; ?></h3>

	<h2>Generate a new password</h2>

	<form class="form-horizontal" role="form" method="POST" action="index.php">

		<label name="count">Number of words:</label>
		<select name="count">
			<option value=1 <?php echo $count == 1 ? 'selected="selected"' : ''; ?>>1</option>
			<option value=2 <?php echo $count == 2 ? 'selected="selected"' : ''; ?>>2</option>
			<option value=3 <?php echo $count == 3 ? 'selected="selected"' : ''; ?>>3</option>
			<option value=4 <?php echo $count == 4 ? 'selected="selected"' : ''; ?>>4</option>
			<option value=5 <?php echo $count == 5 ? 'selected="selected"' : ''; ?>>5</option>
			<option value=6 <?php echo $count == 6 ? 'selected="selected"' : ''; ?>>6</option>
			<option value=7 <?php echo $count == 7 ? 'selected="selected"' : ''; ?>>7</option>
			<option value=8 <?php echo $count == 8 ? 'selected="selected"' : ''; ?>>8</option>
			<option value=9 <?php echo $count == 9 ? 'selected="selected"' : ''; ?>>9</option>
		</select><br>

		<label name="uppercase">Uppercase first letter?</label>
		<input type="checkbox" name="uppercase" value="uppercase" <?php echo ($uppercase) ? 'checked="checked"': '' ; ?>/><br>

		<label name="symbol">Use a symbol?</label>
		<input type="checkbox" name="symbol" value="symbol" <?php echo ($symbol) ? 'checked="checked"': '' ; ?>/><br>

		<label name="number">Include a number?</label>
		<input type="checkbox" name="number" value="number" <?php echo ($number) ? 'checked="checked"': '' ; ?>/><br><br>

		<input class="btn btn-primary" type="submit" name="submit" value="New Password"/>
		<input class="btn" type="submit" name="reset" value="Reset"/>
	</form>

	<br><h3>What is this?</h3>
	<p>
		Originally posted on the <a href="http://xkcd.com/936/" target="_blank">xkcd</a> site by <a href="http://xkcd.com/about/" target="_blank">Randall Munroe</a>, this comic suggests that some passwords are easier to remember yet much harder to crack than others.
		This simple application will generate such a password if you so choose to use one.
	</p>

	<img src="images/comic_strip.png" alt="password comic strip">
</div>