<?php require('logic.php'); ?>

<div class="container">
	<h1>xkcd Password Generator</h1>

	<div class="password">
		<h2><?php echo $password ? $password : ''; ?></h2>
		<?php
			switch ($strength) {
				case 'Weak':
					echo "<button type=\"button\" class=\"btn btn-danger btn-lg active\">" . $strength . "</button>";
					break;

				case 'Medium':
					echo "<button type=\"button\" class=\"btn btn-warning btn-lg active\">" . $strength . "</button>";
					break;

				case 'Strong':
					echo "<button type=\"button\" class=\"btn btn-success btn-lg active\">" . $strength . "</button>";
					break;
			}
		?>
	</div>

	<h3>Generate a new password</h3>

	<form class="form-horizontal" role="form" method="POST" action="index.php">

		<label name="count">Number of words:</label>
		<select name="count">
			<option value=1 <?php echo $count == 1 ? 'selected="selected"' : ''; ?>>1</option>
			<option value=2 <?php echo $count == 2 ? 'selected="selected"' : ''; ?>>2</option>
			<option value=3 <?php echo $count == 3 ? 'selected="selected"' : ''; ?>>3</option>
			<option value=4 <?php echo $count == 4 ? 'selected="selected"' : ''; ?>>4</option>
			<option value=5 <?php echo $count == 5 ? 'selected="selected"' : ''; ?>>5</option>
			<option value=6 <?php echo $count == 6 ? 'selected="selected"' : ''; ?>>6</option>
		</select><br>

		<label name="uppercase">Uppercase first letter?</label>
		<input type="checkbox" name="uppercase" value="uppercase" <?php echo ($uppercase) ? 'checked="checked"': '' ; ?>/><br>

		<label name="symbol">Use a symbol?</label>
		<input type="checkbox" name="symbol" value="symbol" <?php echo ($symbol) ? 'checked="checked"': '' ; ?>/><br>

		<label name="number">Include a number?</label>
		<input type="checkbox" name="number" value="number" <?php echo ($number) ? 'checked="checked"': '' ; ?>/><br>

		<label name="theme">Theme:</label>
		<select name="theme">
			<option value="ogden" <?php echo $theme == "ogden" ? 'selected="selected"' : ''; ?>>Ogden Basic</option>
			<option value="picture" <?php echo $theme == "picture" ? 'selected="selected"' : ''; ?>>Picture Words</option>
			<option value="animals" <?php echo $theme == "animals" ? 'selected="selected"' : ''; ?>>Animals</option>
			<option value="body" <?php echo $theme == "body" ? 'selected="selected"' : ''; ?>>Body Parts</option>
		</select><br><br>

		<input class="btn btn-primary" type="submit" name="submit" value="Get a Password"/>
	</form>

	<br><h3>What is this?</h3>
	<p>
		Originally posted on the <a href="http://xkcd.com/936/" target="_blank">xkcd</a> site by <a href="http://xkcd.com/about/" target="_blank">Randall Munroe</a>, this comic suggests that some passwords are easier to remember yet much harder to crack than others.
		This simple application will generate such a password if you so choose to use one.
	</p>

	<img src="images/comic_strip.png" alt="password comic strip">
</div>