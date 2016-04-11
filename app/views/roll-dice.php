<!doctype html>

<html>
<head>
	<title>Roll Dice Game</title>
</head>
<body>
	<h1>Roll: <?php echo $number ?></h1>
	<h1>Guess: <?php echo $guess ?></h1>

	<?php if($number == $guess) {?>
		<h2>You guessed correctly!</h2>
	<?php } else { ?>
		<h2>You guessed incorrectly.</h2>
	<?php } ?>
</body>
</html>