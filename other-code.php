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

date

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

?>


<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
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
			if ($t > "20") {
				echo "Have a good day!";
			} else {
				echo "Have a good night!";
			}
			?>
			<hr>
			<h2>
			PHP - The if...elseif...else Statement
			</h2>
			<!--
				if (condition) {
					code to be executed if this condition is true;
				} elseif (condition) {
					code to be executed if first condition is false and this condition is true;
				} else {
					code to be executed if all conditions are false;
				}
			-->
			<?php
			$t = date("H");
			if ($t < "7") {
				echo "Have a good morning!";
			} elseif ($t > "20") {
				echo "Have a good day!";
			} else {
				echo "Have a good night!";
			}
			?>
			<hr>
			<h2>
			The PHP switch Statement
			</h2>
			<?php
			$favcolor = "green";
			switch ($favcolor) {
				case "red":
					echo "Your favorite color is red!";
				break;
				case "blue":
					echo "Your favorite color is blue!";
				break;
				case "green":
					echo "Your favorite color is green!";
				break;
				default:
					echo "Your favorite color is neither red, blue, nor green!";
			}
			?>
			<hr>
			<h2>
			The PHP foreach Loop
			</h2>
			<?php
			$colors = array("red", "green", "blue", "yellow");
				foreach ($colors as $value) {
					echo "$value <br>";
			} ?>
			<hr>
			<h2>
			PHP Functions
			</h2>
			<!--
			function functionName() {
				code to be executed;
			} -->
			<?php
			function writeMsg() {
				echo "Hello world!";
			}
			writeMsg(); // call the function
			?>
			<hr>
			<?php
			function familyName($fname, $fyear) {
				echo "$fname Refsnes, yili: $fyear <br>";
			}
				familyName("Jani", "1975");
				familyName("Hege", "1975");
				familyName("Stale", "1975");
				familyName("Kai Jim", "1975");
				familyName("Borge", "1975");
			?>
			<hr>
			<h2>
			
			</h2>
			<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
			<hr>

			<h2>
			server
			</h2>
			<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo "<br>";
?>
			<hr>

			<h2>
			
			</h2>

			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
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