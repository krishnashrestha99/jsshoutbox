<?php include 'database.php'; ?>
<?php

	$query = "SELECT * FROM  shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JS Shoutbox</title>
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>

	<div id="container">
		<header>
			<h1>JS Shoutbox</h1>
		</header>

		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)){?>
					<li><?php echo $row['name'] .': '. $row['shout'] . ' ['. $row['date'].']'; ?></li>
				<?php } ?>
			</ul>
		</div>

		<footer>
			<form action="">
				<label for="name">Name:</label>
				<input type="text" id="name">
				<label for="shout_text">Shout Text:</label>
				<input type="text" id="shout">
				<input type="submit" id="submit" value="SHOUT!">
			</form>
		</footer>
	</div>

</body>
</html>
