<?php
$site_title = "asaKew";
define("site_title", "Welcome to W3Schools.com!");
$site_title = "asaKew";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo site_title; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	</head>
	<body class="bg-dark text-white py-3">
		<div class="container">
			<h2>PHP Constant</h2>
			<?php
			// define(name, value, case-insensitive)
			define("GREETING", "Welcome to W3Schools.com!");
			// define("GREETING", "Welcome to W3Schools.com!", true);
			echo GREETING;
			?>
			<hr>
			<h2>PHP Constant Arrays</h2>
			<?php
			define("cars", [
				"Alfa Romeo",
				"BMW",
				"Toyota"
			]);
			echo cars[2];
			?>
			<hr>
			<h2>Constants are Global</h2>
			<?php
			define("GREETING", "Welcome to W3Schools.com!");
			function defineFTest() {
			echo GREETING;
			}
			
			defineFTest();
			?>
			<hr>
			<h2>Concatenation</h2>
			<?php
				$txt1 = "Hello";
				$txt2 = " world!";
			echo $txt1 . $txt2;
			?>
			<hr>
			<h2>PHP - The if Statement</h2>
			<!--
			if (condition) {
				code to be executed if condition is true;
			} -->
			<?php
			$t = date("H");
				if ($t < "20") {
					echo "Have a good day!";
			}
			?>
			<hr>
			<h2>
			PHP - The if...else Statement
			</h2>
			<!--
			if (condition) {
				code to be executed if condition is true;
			} else {
				code to be executed if condition is fals
			}
			-->
			<?php
			$t = date("H");
			if ($t < "20") {
				echo "Have a good day!";
			} else {
				echo "Have a good night!";
			}
			?>
			<hr>
			<h2>
			
			</h2>
			<hr>
			<h2>
			
			</h2>
			<hr>
			<h2>
			
			</h2>
			<hr>
			<h2>
			
			</h2>
			<hr>
			<h2>
			
			</h2>
			<hr>
			<?php
			$color = "red";
			echo "My car is " . $color . "<br>";
			echo "My house is " . $COLOR . "<br>";
			echo "My boat is " . $coLOR . "<br>";
			echo strlen("Hello worls!"); // outputs 12
			echo str_word_count("Hello world!"); // outputs 2
			?>
			<?php
			$txt = "Hello world!";
			$x = 5;
			$y = 10.5;
			?>
		</div>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
	</body>
</html>